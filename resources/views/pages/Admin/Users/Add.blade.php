@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Add User</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="{{ route('Admin.Users') }}"><span>Users</span></a></li>
                    <li class="active"><span>Add User</span></li>
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
                                <form action="{{ route('Post.AddUser') }}" method="POST">
                                    @csrf
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-info-outline mr-10"></i>User Details</h6>
                                    <hr class="light-grey-hr" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Username</label>
                                                <input type="text" id="Username" name="Username" class="form-control"
                                                    placeholder="Enter First Name" value="{{ old('Username') }}">
                                                @error('Username')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">First Name</label>
                                                <input type="text" id="FirstName" name="FirstName" class="form-control"
                                                    placeholder="Enter First Name" value="{{ old('FirstName') }}">
                                                @error('FirstName')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Last Name</label>
                                                <input type="text" id="LastName" name="LastName" class="form-control"
                                                    placeholder="Enter First Name" value="{{ old('LastName') }}">
                                                @error('LastName')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Email</label>
                                                <input type="text" id="Email" name="Email" class="form-control"
                                                    placeholder="Enter First Name" value="{{ old('Email') }}">
                                                @error('Email')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Phone Number</label>
                                                <input type="text" id="Phone" name="Phone" class="form-control"
                                                    placeholder="Enter First Name" value="{{ old('Phone') }}">
                                                @error('Phone')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Currency Preferences</label>
                                                <select class="form-control form-select" name="currency" id="currency">
                                                    <option value="">Select Currency
                                                        Preferences</option>
                                                    @foreach ($currencies as $currency)
                                                        <option value="{{ $currency->base }}"
                                                            {{ old('currency') == $currency->base ? 'selected' : null }}>
                                                            {{ $currency->base }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @error('currency')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-actions">
                                        <button class="btn btn-orange btn-icon left-icon mr-10 pull-left" id="AddBtn">
                                            <i class="fa fa-check"></i> <span>Add User</span></button>
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
