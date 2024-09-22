@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Expense Detail</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('Pages.ExpenseLog') }}"><span>Expenses</span></a></li>
                    <li class="active"><span>Slip</span></li>
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
                                <form action="{{ route('Expense.Log') }}" method="POST">
                                    @csrf
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-info-outline mr-10"></i>Expense Details
                                    </h6>
                                    <hr class="light-grey-hr" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Expense Category</label>
                                                <input type="text" class="form-control" readonly
                                                    value="{{ $slip->type }}">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Amount</label>
                                                <input type="number" readonly id="Amount" name="Amount"
                                                    class="form-control" placeholder="Enter Expense Amount"
                                                    value="{{ $slip->Amount }}">
                                                @error('Amount')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ExpesnseNote" class="control-label mb-10">Note</label>
                                                <textarea name="ExpesnseNote" readonly id="ExpesnseNote" class="form-control" cols="30" rows="10"
                                                    placeholder="Please Add Note (if Any)">{{ $slip->AccomodationOrActivity }}</textarea>
                                                @error('ExpesnseNote')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </form>

                                <div class="form-actions">
                                    <a href="{{ route('Pages.EditSlip', ['id' => $slip->id]) }}" type="button"
                                        class="btn btn-default pull-right">Edit</a>
                                    <form action="{{ route('Pages.DeleteSlip') }}" method="POST">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <input type="hidden" name="slip_id" value={{ $slip->id }}>
                                        <button type="submit" class="btn btn-danger pull-right">Delete Slip</button>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
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
            $('#category').on('change', function() {
                if ($(this).val() == 'new') {
                    $(this).replaceWith(`
                        <input type="text" name="category" class="form-control" placeholder="Please Enter Your New Category" />
                    `)
                }
            })
        })
    </script>
@endsection
