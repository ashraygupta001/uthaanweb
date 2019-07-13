@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">


                    You are logged in as Admin!
                </div>

            </div>
            <br><br>
            <div class="card">
                <div class="card-header">Options</div>
            <div class="card-body">
                <ul>
            <li><a href="/admin">Go to Admin side</a></li><br>
            <li><a href="/">Go back to the Website</a></li>
        </ul>
    </div>
</div>

        </div>
    </div>
</div>
@endsection
