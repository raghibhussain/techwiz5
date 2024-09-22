@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">All Destinations</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('Admin.Dashboard') }}">Dashboard</a></li>
                    <li class="active"><span>Destinations</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Product Row One -->

        <div class="row">
            @foreach ($destinations as $destination)
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <article class="col-item">
                                    <div class="photo">
                                        <div class="options" style="right: 0px">
                                            <a href="{{ route('Pages.EditDestination', ['id' => $destination->id]) }}"
                                                style="background-color: #ff6028; padding: 6px 12px; border-radius: 100%; color: white;"
                                                class="font-18 bg-oranage mr-10 pull-left"><i
                                                    class="zmdi zmdi-edit"></i></a>
                                        </div>

                                        <a href="javascript:void(0);"> <img src="{{ asset($destination->image) }}"
                                                class="img-responsive" style="width: 100%" alt="Product Image"> </a>
                                    </div>
                                    <div class="info">
                                        <h6>{{ $destination->name }}</h6>
                                        <p>{{ substr($destination->description, 0, 100) . '...' }}</p>
                                        <div class="product-rating inline-block">
                                            <a href="javascript:void(0);"
                                                class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a
                                                href="javascript:void(0);"
                                                class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a
                                                href="javascript:void(0);"
                                                class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a
                                                href="javascript:void(0);"
                                                class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a
                                                href="javascript:void(0);"
                                                class="font-12 txt-orange zmdi zmdi-star-outline mr-0"></a>
                                        </div>
                                        <div>
                                            <a class="btn btn-orange">View Details</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- /Product Row Four -->

    </div>
@endsection
@section('addition-scripts')
    <script>
        $(document).ready(function() {
            // Clear Local Storage To Remove Previous Images
            localStorage.clear();
        })
    </script>
@endsection
