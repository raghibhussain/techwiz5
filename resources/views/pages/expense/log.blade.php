@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Log Expense</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
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
                                <form action="{{ route('Expense.Log') }}" method="POST">
                                    @csrf
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-info-outline mr-10"></i>Expense Details
                                    </h6>
                                    <hr class="light-grey-hr" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="control-label mb-10">Active Trip</label>
                                                <input type="hidden" name="trip_id" value="{{ $openTrip->id }}">
                                                <input type="text" readonly class="form-control"
                                                    value="{{ $openTrip->tripName }}">
                                                @error('trip_id')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label mb-10">Expense Category</label>
                                                <select class="form-control form-select" id="category" name="category">
                                                    <option value="">Select Your Category</option>
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->type }}">{{ $category->type }}</option>
                                                    @endforeach
                                                    <option value="new">Add New</option>
                                                </select>

                                                @error('category')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Amount</label>
                                                <input type="number" id="Amount" name="Amount" class="form-control"
                                                    placeholder="Enter Expense Amount" value="{{ old('Amount') }}">
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
                                                <textarea name="ExpesnseNote" id="ExpesnseNote" class="form-control" cols="30" rows="10"
                                                    placeholder="Please Add Note (if Any)">{{ old('ExpesnseNote') }}</textarea>
                                                @error('ExpesnseNote')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="form-actions">
                                        <button class="btn btn-orange btn-icon left-icon mr-10 pull-left" id="AddBtn">
                                            <i class="fa fa-check"></i> <span>Log Expense</span></button>
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
