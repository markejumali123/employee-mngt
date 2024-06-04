@extends('layouts.app')
@section('content')
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
                        <button ><a href="http://127.0.0.1:8000/new-"><input type="submit" class="btn btn-info" value="Register"></a></button>
                        </div>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
    </div>
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