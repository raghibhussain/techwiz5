<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\currencyExchange;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function index()
    {
        $currency = currencyExchange::all();
        return view('pages.Admin.Exchange.Rate', [
            'title' => 'Exchange Rate',
            'currencies' => $currency
        ]);
    }

    public function getExchangeAddPage()
    {
        return view('pages.Admin.Exchange.Add', [
            'title' => 'Add Exchange'
        ]);
    }

    public function addCurrency(Request $req)
    {

        $exchange = json_decode($req->input('currencyExchangeRates'));

        foreach ($exchange->rates as $cr) {
            $currency = new currencyExchange;
            $currency->base = $exchange->base;
            $currency->conversion = $cr->curr;
            $currency->rate = $cr->rate;
            $currency->symbol = $cr->symbol;
            $currency->save();
        }

        return redirect()->route('Admin.Exchange')->with(['Success' => 'Currency Exchange Added Successfully']);
    }
}
