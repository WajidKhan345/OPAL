@extends('layouts.main')

@section('content')
    <h1>All Users List
        <a href="{{route('register')}}" type="button" class="btn btn-primary pull-right">Add New User</a>
    </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Name</th>
                <th>Verification No.</th>
                <th>Issue Date</th>
                <th>ROP License No.</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->verification_no }}</td>
                    <td>{{ $user->issue_date }}</td>
                    <td>{{ $user->license_no }}</td>
                    <td>
                        <a href="{{route('users.show', $user->id)}}" type="button" class="btn btn-primary pull-right">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
