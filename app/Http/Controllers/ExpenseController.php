<?php

namespace App\Http\Controllers;

use App\Models\activity_accomodation;
use App\Models\currencyExchange;
use App\Models\Notification;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    public function getExpensePage()
    {
        $TotalBudget = Trips::where('user_id', Auth::user()->id)->sum('budget');
        $usedExpenses = activity_accomodation::where('user_id', Auth::user()->id)->sum('Amount');
        // dd($usedExpenses);

        if ($TotalBudget > 0) {
            $usedPercentage = round(($usedExpenses / $TotalBudget) * 100, 2);
            $leftPercentage = round(100 - $usedPercentage, 2);
        } else {
            $usedPercentage = 0;
            $leftPercentage = 0;
        }

        $ExpenseData = activity_accomodation::where('user_id', Auth::user()->id)->get();
        if (count($ExpenseData) > 0) {
            $currencyExchangeRate = currencyExchange::where('base', $ExpenseData[0]->currency)->where('conversion', Auth::user()->currency_preference)->first();
        } else {
            $currencyExchangeRate = new \stdClass();
            $currencyExchangeRate->base = "PKR";
            $currencyExchangeRate->conversion = "PKR";
            $currencyExchangeRate->rate = 1;
            $currencyExchangeRate->symbol = "Rs";
        }

        $categorySpecificExpenceData = activity_accomodation::where('user_id', Auth::user()->id)
            ->select(DB::raw('MIN(id) as id'), 'type', DB::raw('SUM(Amount) as total_amount'))
            ->groupBy('type')
            ->get();



        $TripsExpense = Trips::where('user_id', Auth::user()->id)
            ->select(['id', 'budget', 'tripName'])
            ->get();


        // return response()->json($currencyExchangeRate);
        // return response()->json($ExpenseData);

        return view('pages.expense.expense', [
            'title' => 'All Expenses',
            'totalBudget' => $TotalBudget,
            'LeftPercentage' => $leftPercentage,
            'UsedPercentage' => $usedPercentage,
            'ExpenseData' => $ExpenseData,
            'categoriesExpense' => $categorySpecificExpenceData,
            'TripsExpense' => $TripsExpense,
            'exchange' => $currencyExchangeRate
        ]);
    }

    public function getExpenseLogPage()
    {
        $category = activity_accomodation::where('user_id', Auth::user()->id)->select('type')->distinct()->get();
        $openTrip = Trips::where('user_id', Auth::user()->id)->select('tripName', 'id')->where('status', 1)->first();

        if (!$openTrip) {
            return redirect()->route('pages.dashboard')->with(["error" => "You don't have any active trip, please activate a trip to log expense"]);
        }

        return view('pages.expense.log', [
            'title' => 'Log Expense',
            'category' => $category,
            'openTrip' => $openTrip
        ]);
    }

    public function logExpenses(Request $req)
    {

        $validate = $req->validate(
            [
                'trip_id' => 'required|string',
                "category" => 'required|string',
                'Amount' => 'required|string',
                'ExpesnseNote' => 'required|string'
            ],
            [
                'trip_id.required' => "Your don't have any active trips",
                'category.required' => 'Please select or add new category',
                'Amount.required' => 'Please input amount',
                'ExpesnseNote.required' => 'Please Enter Expense Note'
            ]
        );

        $expense = new activity_accomodation;
        $expense->type = $validate['category'];
        $expense->user_id = Auth::user()->id;
        $expense->trip_id = $validate['trip_id'];
        $expense->Amount = $validate['Amount'];
        $expense->AccomodationOrActivity = $validate['ExpesnseNote'];
        $expense->currency = Auth::user()->currency_preference;
        $expense->save();


        $getTripAllocatedBudget = Trips::where('id', $validate['trip_id'])->value('budget');

        $getTotalExpense =  activity_accomodation::where('trip_id', $validate['trip_id'])->select('Amount')->sum('Amount');

        $remainingBudget = $getTripAllocatedBudget - $getTotalExpense;

        $tenPercentOfBudget = 0.10 * $getTripAllocatedBudget;

        if ($remainingBudget <= $tenPercentOfBudget) {
            $notify = new Notification;
            $notify->user_id = Auth::user()->id;
            $notify->head = 'Budget Exceeding';
            $notify->notification = 'You are about to hit limit of allocated budget';
            $notify->save();
        }

        return redirect()->route('pages.expense')->with(['success' => 'Expense Logged Successfully']);
    }

    public function getSlipPage($id)
    {
        $Slip = activity_accomodation::where('id', $id)->first();
        return view('pages.expense.slip', [
            'title' => $Slip->type . ' Slip',
            'slip' => $Slip
        ]);
    }

    public function getSlipEditPage($id)
    {
        $Slip = activity_accomodation::where('id', $id)->first();
        $category = activity_accomodation::where('user_id', Auth::user()->id)->select('type')->distinct()->get();

        return view('pages.expense.slipEdit', [
            'title' => $Slip->type . ' Edit',
            'slip' => $Slip,
            'category' => $category,

        ]);
    }

    public function deleteSlip(Request $req)
    {
        $record = activity_accomodation::find($req->slip_id);
        if ($record) {
            $record->delete();

            return redirect()->route('pages.expense')->with(['success' => 'Slip Deleted Successfully']);
        } else {
            return redirect()->route('pages.expense')->with(['error' => 'Slip not found']);
        }
    }

    public function updateSlip(Request $req)
    {
        $validate = $req->validate(
            [
                'slip_id' => 'required|string',
                "category" => 'required|string',
                'Amount' => 'required|string',
                'ExpesnseNote' => 'required|string'
            ],
            [
                'slip_id.required' => "There is error updaing your slip",
                'category.required' => 'Please select or add new category',
                'Amount.required' => 'Please input amount',
                'ExpesnseNote.required' => 'Please Enter Expense Note'
            ]
        );

        $Slip = activity_accomodation::where('id', $req->slip_id)->first();
        $Slip->type = $validate['category'];
        $Slip->Amount = $validate['Amount'];
        $Slip->AccomodationOrActivity = $validate['ExpesnseNote'];
        $Slip->save();

        return redirect()->route('pages.expense')->with(['success' => 'Slip Updated Successfully']);
    }
}
