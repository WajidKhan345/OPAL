<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Name</th>
                <th>Verification No.</th>
                <th>Issue Date</th>
                <th>ROP License No.</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->verification_no }}</td>
                <td>{{ $user->issue_date }}</td>
                <td>{{ $user->license_no }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
