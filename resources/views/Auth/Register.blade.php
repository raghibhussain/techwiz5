<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Register - ExpenseVoyage</title>
    <meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Admintres Admin, Admintresadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}"
        rel="stylesheet" type="text/css" />



    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->

    <div class="wrapper  pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="/">
                    <img class="brand-img mr-10" src="{{ asset('img/expensevoygaye.png') }}" alt="brand"
                        style="width: 100px" />
                    <span class="brand-text"><img src="{{ asset('img/expensevoygaye.png') }}" alt="brand"
                            style="width: 100px;" /></span>
                </a>
            </div>
            <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">Already have an account?</span>
                <a class="inline-block btn btn-orange btn-rounded" href="{{ route('Auth.login') }}">Sign In</a>
            </div>
            <div class="clearfix"></div>
        </header>

        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">Sign up to ExpenseVoyage</h3>
                                        <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="{{ route('Auth.Post.Register') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="FirstName">First Name</label>
                                                <input type="text" name="FirstName" class="form-control"
                                                    required="" id="FirstName" placeholder="Enter First Name"
                                                    value="{{ old('FirstName') }}">
                                                @error('FirstName')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="LastName">Last Name</label>
                                                <input type="text" name="LastName" class="form-control"
                                                    required="" id="LastName" value="{{ old('LastName') }}"
                                                    placeholder="Enter Last Name">
                                                @error('LastName')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="username">Username</label>
                                                <input type="text" name="username" class="form-control"
                                                    required="" id="username" value="{{ old('username') }}"
                                                    placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="email">Email
                                                    address</label>
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    class="form-control" required="" id="email"
                                                    placeholder="Enter email">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="number">Phone Number</label>
                                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                                    class="form-control" required="" id="number"
                                                    placeholder="Enter Phone Number">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10"
                                                    for="password">Password</label>
                                                <input type="password" name="password" value="{{ old('password') }}"
                                                    class="form-control" required="" id="password"
                                                    placeholder="Enter Password">
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="c_password">Confirm
                                                    Password</label>
                                                <input type="password" name="c_password" class="form-control"
                                                    required="" id="c_password"
                                                    placeholder="Enter Confirm Password">
                                                @error('c_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox checkbox-primary pr-10 pull-left">
                                                    <input id="checkbox_2"
                                                        {{ old('acceptance') == 'on' ? 'checked' : '' }}
                                                        name="acceptance" required="" type="checkbox">
                                                    <label for="checkbox_2"> I agree to all <a
                                                            class="txt-orange">Terms
                                                            & Conditions</a></label>
                                                    @error('acceptance')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-orange btn-rounded">sign
                                                    Up</button>
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

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dist/js/init.js') }}"></script>
</body>

</html>
