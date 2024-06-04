@extends('layouts.app')
@section('content')
<table class="table mt-5">
    <div class="row">
</div>
<li>
<img src="dist/img/user1-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">Alexander Pierce</a>
<span class="users-list-date">Today</span>
</li>
    <div class="container">
</div>
    <div class="container">
        <h3 align="center" class="mt-5">Employee Registration</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="emp_name">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="emp_name2">
                        </div>
                        <div class="col-md-6">
                            <label>Employee DOB</label>
                            <input type="date" class="form-control" name="dob">
                        </div>
                        <div class="col-md-6">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>

                    <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                       <input type="submit" class="btn btn-info" a href="http://127.0.0.1:8000/new-" value="Register"></a>
                        </div>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
    </div>
</table>
@endsection
@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush