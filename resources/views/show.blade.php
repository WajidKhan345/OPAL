@extends('layouts.main')

@section('content')
    <style>
        .cardDiv {
            background-image: url("{{asset('images/background.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;

            width: 40%;
            margin: auto;
            height: 200px;
        }

        .userImage {
            width: 85%;
            margin: auto;
        }
    </style>
    <h1>User Detail
        <a href="{{ route('users.index') }}" type="button" class="btn btn-primary pull-right">Users List</a>
    </h1>

    <div class="cardDiv">
        <div class="row">
            <div class="col-md-4 text-center pt-2">
                <img src="{{asset('images/user.jpg')}}" class="userImage" alt="Image" />
            </div>
            <div class="col-md-8">
                <h2>Unified HSE Passport</h2>
                <br>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Verification No:</strong> {{ $user->verification_no }}</p>
                <p><strong>Issue Date:</strong> {{ $user->date }}</p>
                <p><strong>ROP License No:</strong> {{ $user->license_no }}</p>
            </div>
        </div>
    </div>
@endsection
