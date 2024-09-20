@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Log Expense</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="{{ route('Pages.ExpenseLog') }}"><span>Expenses</span></a></li>
                    <li class="active"><span>Expense Log</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pt-0">
                            <div class="form-wrap">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('Currency.Add') }}" method="POST">
                                    @csrf
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-info-outline mr-10"></i>Exchange Details
                                    </h6>
                                    <hr class="light-grey-hr" />
                                    <div class="row exchangeRateDiv">
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label mb-10">Base Currency</label>
                                                <select id="baseCurrency" name="baseCurrency"
                                                    class="form-control form-select baseCurrency">
                                                    <option value="" label="Select Base Currency" selected="selected">
                                                        Select Base Currency</option>
                                                    <option value="PKR" label="Pakistani rupee">PKR
                                                    </option>
                                                    <option value="LP" label="Palestine pound">Palestine pound</option>
                                                    <option value="GBP" label="Pound sterling">GBP</option>
                                                    <option value="EUR" label="Euro">EUR</option>
                                                    <option value="USD"label="US dollar">USD</option>
                                                </select>

                                                @error('baseCurrency')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label mb-10">Conversion Currency</label>
                                                <select id="ConversionCurrencyList" name="ConversionCurrency"
                                                    class="form-control form-select ConversionCurrency">
                                                    <option value="" label="Select Conversion Currency"
                                                        selected="selected">
                                                        Select Conversion Currency</option>
                                                    <option value="PKR" label="Pakistani rupee">
                                                        PKR
                                                    </option>
                                                    <option value="LP" label="Palestine pound">Palestine pound
                                                    </option>
                                                    <option value="GBP" label="Pound sterling">GBP</option>
                                                    <option value="EUR" label="Euro">EUR</option>
                                                    <option value="USD"label="US dollar">USD</option>
                                                </select>
                                                @error('ConversionCurrency')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label mb-10">Exchange Rate</label>
                                                <input type="text" name="echangeRate" class="form-control echangeRate"
                                                    placeholder="Enter Exchange Rate">

                                                @error('echangeRate')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label mb-10">Exchange Symbol</label>
                                                <input type="text" name="exchangeSymbol"
                                                    class="form-control exchangeSymbol" placeholder="Enter Exchange Symbol">

                                                @error('exchangeSymbol')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>


                                    </div>

                                    <div class="form-actions" id="addMoreDiv">
                                        <button type="button" class="btn btn-orange btn-icon left-icon mr-10 pull-left"
                                            id="AddAnotherExchange">
                                            <i class="fa fa-plus"></i> <span>Add Another</span></button>
                                        <div class="clearfix"></div>
                                    </div>


                                    <hr class="light-grey-hr" />

                                    <input type="hidden" id="exchange" name="currencyExchangeRates">

                                    <div class="form-actions">
                                        <button class="btn btn-orange btn-icon left-icon mr-10 pull-left" id="AddBtn">
                                            <i class="fa fa-check"></i> <span>Add Currency</span></button>
                                        <button type="button" class="btn btn-default pull-left">Cancel</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
@section('addition-scripts')
    <script>
        $(document).ready(function() {
            $('#baseCurrency').on('input', function() {
                $('#error').remove();
            })

            $('#AddAnotherExchange').on('click', function() {

                if ($('#baseCurrency').val() === '') {
                    $('#error').remove();
                    $('#baseCurrency').after(
                        '<span id="error" class="text-danger fw-bold">Please Enter Base Currency</span>'
                    );
                    return false;
                } else {
                    $('#error').remove();
                }

                let baseCurrencyVal = $('#baseCurrency').val() || $('#baseCurrencyVal').val();
                let baseCurrencyText = $('#baseCurrency option:selected').attr('label') || $(
                    '#baseCurrenctText').val();




                $('#baseCurrency').replaceWith(` <input type="hidden" id="baseCurrencyVal" class="baseCurrency" value="${baseCurrencyVal}" name="baseCurrency">
                                                <input type="text" id="baseCurrenctText" readonly class="form-control"
                                                    placeholder="Enter Base Currency" value="${baseCurrencyText}">`)


                let html = `
                  <div class="row exchangeRateDiv">
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label baseCurrency mb-10">Base Currency</label>
                                                <input type="hidden" value="${baseCurrencyVal}" name="baseCurrency">
                                                <input type="text"  readonly class="form-control"
                                                    placeholder="Enter Base Currency" value="${baseCurrencyText}">

                                                @error('baseCurrency')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                      <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label mb-10">Conversion Currency</label>
                                                <select id="ConversionCurrencyList" name="ConversionCurrency"
                                                    class="form-control form-select ConversionCurrency">
                                                    <option value="" label="Select Conversion Currency"
                                                        selected="selected">
                                                        Select Conversion Currency</option>
                                                    <option value="PKR" label="Pakistani rupee">
                                                        PKR
                                                    </option>
                                                    <option value="LP" label="Palestine pound">Palestine pound
                                                    </option>
                                                    <option value="GBP" label="Pound sterling">GBP</option>
                                                    <option value="EUR" label="Euro">EUR</option>
                                                    <option value="USD"label="US dollar">USD</option>
                                                </select>
                                                @error('ConversionCurrency')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label mb-10">Exchange Rate</label>
                                                <input type="text" name="echangeRate" class="form-control echangeRate"
                                                    placeholder="Enter Exchange Rate">

                                                @error('echangeRate')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                         <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="control-label mb-10">Exchange Symbol</label>
                                                <input type="text" name="exchangeSymbol" class="form-control exchangeSymbol"
                                                    placeholder="Enter Exchange Symbol">

                                                @error('exchangeSymbol')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>


                                    </div>
            `

                $('#addMoreDiv').before(html);
            });


            function getCurrencyExchange() {
                var currencyExchange = {};

                $('.exchangeRateDiv').each(function() {
                    let baseCurrency = $(this).find('.baseCurrency').val();
                    let ConversionCurrency = $(this).find('.ConversionCurrency').val();
                    let ExchangeRate = $(this).find('.echangeRate').val();
                    let exchangeSymbol = $(this).find('.exchangeSymbol').val();

                    // If the base currency is not already added, initialize it
                    if (!currencyExchange.base) {
                        currencyExchange.base = baseCurrency;
                        currencyExchange.rates = []; // Initialize rates array
                    }

                    // Push the exchange rate only if they are valid
                    if (ConversionCurrency && ExchangeRate) {
                        currencyExchange.rates.push({
                            rate: ExchangeRate,
                            curr: ConversionCurrency,
                            symbol: exchangeSymbol
                        });
                    }
                });


                $('#exchange').val(JSON.stringify(currencyExchange));
            }



            $('form').on('submit', function() {
                getCurrencyExchange();
            })

            $(document).on('change', '.ConversionCurrency', function() {

                console.log('changed')

                var selectedCurrency = $(this).val();
                var symbol;

                switch (selectedCurrency) {
                    case 'PKR':
                        symbol = 'Rs';
                        break;
                    case 'LP':
                        symbol = '£P';
                        break;
                    case 'GBP':
                        symbol = '£';
                        break;
                    case 'EUR':
                        symbol = '€';
                        break;
                    case 'USD':
                        symbol = '$';
                        break;
                    default:
                        symbol = '';
                }

                $(this).closest('.exchangeRateDiv').find('.exchangeSymbol').val(symbol);
                console.log($(this).closest('.exchangeRateDiv').html())
            });
        })
    </script>
@endsection
