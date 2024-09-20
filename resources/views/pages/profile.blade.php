@extends('Layout.Layout')
@section('main-content')
    <!-- Main Content -->

    <div class="container pt-30 ">
        <!-- Row -->
        <div class="row " style="display: flex; justify-content:Center;">
            <div class="col-sm-4">
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="panel panel-default card-view  pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body  pa-0">
                                    <div class="profile-box">
                                        <div class="profile-cover-pic">
                                            <div class="fileupload btn btn-default">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" type="file">
                                            </div>
                                            <div class="profile-image-overlay"></div>
                                        </div>
                                        <div class="profile-info text-center mb-15">
                                            <div class="profile-img-wrap">
                                                <img class="inline-block mb-10" src="../img/mock1.jpg" alt="user" />
                                                <div class="fileupload btn btn-default">
                                                    <span class="btn-text">edit</span>
                                                    <input class="upload" type="file">
                                                </div>
                                            </div>
                                            <h5 class="block mt-10 weight-500 capitalize-font txt-dark">
                                                {{ Auth::user()->FirstName . ' ' . Auth::user()->LastName }}
                                            </h5>
                                            <h6 class="block capitalize-font">{{ Auth::user()->email }}</h6>
                                        </div>
                                        <div class="social-info">

                                            <button class="btn btn-orange btn-block  btn-anim mt-15" data-toggle="modal"
                                                data-target="#myModal"><i class="fa fa-pencil"></i><span
                                                    class="btn-text">edit profile</span></button>
                                            <div id="myModal" class="modal fade in" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                            <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Row -->
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="">
                                                                        <div class="panel-wrapper collapse in">
                                                                            <div class="panel-body pa-0">
                                                                                <div class="col-sm-12 col-xs-12">
                                                                                    <div class="form-wrap">
                                                                                        <form
                                                                                            action="{{ route('Auth.Post.Update.Profile') }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            <div
                                                                                                class="form-body overflow-hide">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="control-label mb-10"
                                                                                                        for="exampleInputuname_1">First
                                                                                                        Name</label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <div
                                                                                                            class="input-group-addon">
                                                                                                            <i
                                                                                                                class="icon-user"></i>
                                                                                                        </div>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="firstName"
                                                                                                            name="firstName"
                                                                                                            placeholder="willard bryant"
                                                                                                            value="{{ Auth::user()->FirstName }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="control-label mb-10"
                                                                                                        for="exampleInputuname_1">Last
                                                                                                        Name</label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <div
                                                                                                            class="input-group-addon">
                                                                                                            <i
                                                                                                                class="icon-user"></i>
                                                                                                        </div>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="lastName"
                                                                                                            name="lastName"
                                                                                                            placeholder="willard bryant"
                                                                                                            value="{{ Auth::user()->LastName }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="control-label mb-10"
                                                                                                        for="exampleInputEmail_1">Email
                                                                                                        address</label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <div
                                                                                                            class="input-group-addon">
                                                                                                            <i
                                                                                                                class="icon-envelope-open"></i>
                                                                                                        </div>
                                                                                                        <input
                                                                                                            type="email"
                                                                                                            class="form-control"
                                                                                                            id="email"
                                                                                                            name="email"
                                                                                                            placeholder="xyz@gmail.com"
                                                                                                            value="{{ Auth::user()->email }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="control-label mb-10"
                                                                                                        for="exampleInputContact_1">Contact
                                                                                                        number</label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <div
                                                                                                            class="input-group-addon">
                                                                                                            <i
                                                                                                                class="icon-phone"></i>
                                                                                                        </div>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="contact_number"
                                                                                                            placeholder="+102 9388333"
                                                                                                            name="contract_number"
                                                                                                            value="{{ Auth::user()->phone }}">
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="control-label mb-10">Currency
                                                                                                        Preferences</label>
                                                                                                    <select
                                                                                                        class="form-control"
                                                                                                        data-placeholder="Choose a Category"
                                                                                                        tabindex="1"
                                                                                                        name="currencyPref">
                                                                                                        @foreach ($currencies as $currency)
                                                                                                            <option
                                                                                                                value="{{ $currency->base }}"
                                                                                                                {{ $currency->base === Auth::user()->CurrencyPref }}>
                                                                                                                {{ $currency->base }}
                                                                                                            </option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="form-actions mt-10">
                                                                                                <button type="submit"
                                                                                                    class="btn btn-default mr-10 mb-30">Update
                                                                                                    profile</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-orange waves-effect"
                                                                data-dismiss="modal">Save</button>
                                                            <button type="button" class="btn btn-default waves-effect"
                                                                data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
