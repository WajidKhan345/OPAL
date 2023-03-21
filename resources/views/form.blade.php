<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td colspan="1">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form class="well form-horizontal" action="{{ route('store') }}" method="post">
                        @csrf
                        <h2 class="text-center">Registration Form</h2>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span>
                                        <input id="fullName" name="fullName" placeholder="Full Name"
                                            class="form-control" required="true" value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Verification No.</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-ok"></i></span>
                                        <input id="verification" name="verification" placeholder="Verification No."
                                            class="form-control" required="true" value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Date</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-calendar"></i></span><input id="date"
                                            name="date" placeholder="Issue Date" class="form-control" required="true"
                                            value="" type="date"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">ROP License No.</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-registration-mark"></i></span><input
                                            id="rop_license_no" name="rop_license_no" placeholder="ROP License No."
                                            class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
