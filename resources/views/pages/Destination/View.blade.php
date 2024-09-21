@extends('Layout.Layout')
@section('main-content')
    <style>
        .bold {
            font-weight: bolder;
        }

        .gallery-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 10px;


        }

        .gallery-container div h3 {
            margin-left: -12px;
        }

        .large-image {
            width: 100%;
            max-width: 85%;
            height: 470px;
            object-fit: cover;
            margin-right: 20px;
            box-shadow: 0px 0px 54px 7px rgba(0, 0, 0, 0.17);
            -webkit-box-shadow: 0px 0px 54px 7px rgba(0, 0, 0, 0.17);
            -moz-box-shadow: 0px 0px 54px 7px rgba(0, 0, 0, 0.17);
        }

        .thumb-images {
            display: flex;
            flex-direction: column;
        }

        .thumb-images img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .thumb-images img:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .large-image {
                height: 400px;
            }

            .thumb-images img {
                width: 120px;
                height: 120px;
            }
        }

        @media (max-width: 576px) {
            .gallery-container {
                flex-direction: column;
                align-items: center;
            }

            .large-image {
                max-width: 90%;
                height: 350px;

            }

            .thumb-images {
                flex-direction: row;
                margin-top: 10px;

            }

            .thumb-images img {
                width: 80px;
                height: 80px;
                margin-right: 10px;
            }
        }

        img {
            border-radius: 10px;
        }

        .details {
            margin-top: 10px;
            margin-left: 7px;
        }

        .details div p {
            margin-top: 10px;
            font-size: 18px;
        }

        .timeline-panel {
            border: 1px solid silver;
            border-radius: 5px;
        }
    </style>


    <div class="container">

        <div class="container gallery-container">




            <!-- Large Image -->
            <img id="largeImage" src="{{ asset($destination->image) }}" alt="Large Image" class="large-image">

            <!-- Thumbnail Images (on the right side) -->
            <div class="thumb-images">
                <img src="{{ asset($destination->image2) }}" alt="Thumb Image 1" onclick="swapImage(this)">
                <img src="{{ asset($destination->image3) }}" alt="Thumb Image 2" onclick="swapImage(this)">
                <img src="{{ asset($destination->image4) }}" alt="Thumb Image 3" onclick="swapImage(this)">
            </div>

        </div>



        <div class="panel panel-default card-view">
            <!-- Row -->
            <div class="row mt-5">
                <div class="col-lg-12">

                    <!-- Title -->

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h3 class="txt-dark">{{ $destination->name }}</h3>
                    </div>
                    <!-- /Title -->

                </div>
            </div>
            <!-- /Row -->

            <!-- CARD Start -->
            <div class="row details">


                <div class="col-sm-12 ">
                    <p><i class="zmdi zmdi-map bold"> Destination Name: </i></p>{{ $destination->name }}
                    <p><i class="zmdi zmdi-pin bold"> Destination Location: </i></p>{{ $destination->location }}
                    <br> <br>
                    <h6>Description</h6>
                    {{ $destination->description }}
                    <br><br>
                </div>

            </div>
            <!-- CARD End -->










        </div>
    </div>
@endsection
@section('addition-scripts')
    <script>
        function swapImage(thumb) {
            var largeImage = document.getElementById("largeImage");
            var tempSrc = largeImage.src;
            largeImage.src = thumb.src;
            thumb.src = tempSrc;
        }
    </script>
@endsection
