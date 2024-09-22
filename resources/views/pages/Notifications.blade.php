@extends('Layout.Layout')
@section('main-content')
    <style>
        .bold {
            font-weight: bold;
        }

        .notification {
            border-top: 1px solid silver;
            padding: 10px;

        }

        .notification:hover {
            background-color: #e5e5e5;
        }

        .icon .zmdi {
            font-size: 5vh;
            color: #ff6028;
            margin-top: 8px;
        }
    </style>
    <div class="container pt-30">

        <div class="panel panel-default card-view">
            <h5 class="panel-heading">Notifications</h5>

            @foreach ($Notifications as $notify)
                <div class="row p-5 align-items-center notification">
                    <div class="icon col-sm-1">
                        <i class="zmdi zmdi-notifications-active"></i>
                    </div>
                    <div class="col-sm-9"><span class="bold">{{ $notify->head }}</span>
                        <p>{{ $notify->notification }}</p>
                    </div>
                    <div class="col-sm-2">{{ $notify->created_at->format('H:i') }}</div>
                </div>
            @endforeach

            {{ $Notifications->links('pagination::bootstrap-4') }}


        </div>
    </div>
@endsection
