@extends('layouts.main')
@section('content')
    <h1>Register New User
        <a href="{{ route('users.index') }}" type="button" class="btn btn-primary pull-right">View Users</a>
    </h1>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <form class="well form-horizontal" action="{{ route('store') }}" method="post">
        @csrf
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label">Full Name</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true"
                            value="" type="text">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Verification No.</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                        <input id="verification" name="verification" placeholder="Verification No." class="form-control"
                            required="true" value="" type="text">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Date</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i
                                class="glyphicon glyphicon-calendar"></i></span><input id="date" name="date"
                            placeholder="Issue Date" class="form-control" required="true" value="" type="date">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">ROP License No.</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i
                                class="glyphicon glyphicon-registration-mark"></i></span><input id="rop_license_no"
                            name="rop_license_no" placeholder="ROP License No." class="form-control" required="true"
                            value="" type="text"></div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </fieldset>
    </form>
@endsection
