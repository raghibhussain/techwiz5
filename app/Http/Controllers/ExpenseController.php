<?php

namespace App\Http\Controllers;

use App\Models\activity_accomodation;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function getExpensePage()
    {
        $TotalBudget = Trips::where('user_id', Auth::user()->id)->sum('budget');
        $usedExpenses = activity_accomodation::where('user_id', Auth::user()->id)->sum('Amount');

        $usedPercentage = round(($usedExpenses / $TotalBudget) * 100, 2);
        $leftPercentage = round(100 - $usedPercentage, 2);

        $ExpenseData = activity_accomodation::where('user_id', Auth::user()->id)->get();

        // return response()->json($ExpenseData);

        return view('pages.expense.expense', [
            'title' => 'All Expenses',
            'totalBudget' => $TotalBudget,
            'LeftPercentage' => $leftPercentage,
            'UsedPercentage' => $usedPercentage,
            'ExpenseData' => $ExpenseData
        ]);
    }
}
