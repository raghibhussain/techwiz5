<?php

namespace App\Http\Controllers;

use App\Models\activity_accomodation;
use App\Models\currencyExchange;
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

        if ($TotalBudget > 0) {
            $usedPercentage = round(($usedExpenses / $TotalBudget) * 100, 2);
            $leftPercentage = round(100 - $usedPercentage, 2);
        } else {
            $usedPercentage = 0;
            $leftPercentage = 0;
        }
        $ExpenseData = activity_accomodation::where('user_id', Auth::user()->id)->get();

        $currencyExchangeRate = currencyExchange::where('base', $ExpenseData[0]->currency)->where('conversion', Auth::user()->currency_preference)->first();


        $categorySpecificExpenceData = activity_accomodation::where('user_id', Auth::user()->id)
            ->select('type', DB::raw('SUM(Amount) as total_amount'))
            ->groupBy('type')
            ->get();



        $TripsExpense = Trips::where('user_id', Auth::user()->id)
            ->select(['budget', 'tripName'])
            ->get();


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
        $category = activity_accomodation::where('user_id', Auth::user()->id)->select('type')->get();
        $openTrip = Trips::where('user_id', Auth::user()->id)->select('tripName', 'id')->where('status', 1)->first();

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

        return redirect()->route('pages.expense')->with(['success' => 'Expense Logged Successfully']);
    }
}
