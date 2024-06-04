@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
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
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>


                    <div class="col-md-6">

<div class="card">
<div class="card-header">
<h3 class="card-title">Latest Members</h3>
<div class="card-tools">
<span class="badge badge-danger">8 New Members</span>
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div></div>

<div class="card-body p-0">
<ul class="users-list clearfix">
<li>
<img src="dist/img/user1-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">Alexander Pierce</a>
<span class="users-list-date">Today</span>
</li>
<li>
<img src="dist/img/user8-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">Norman</a>
<span class="users-list-date">Yesterday</span>
</li>
<li>
<img src="dist/img/user7-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">Jane</a>
<span class="users-list-date">12 Jan</span>
</li>
<li>
<img src="dist/img/user6-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">John</a>
<span class="users-list-date">12 Jan</span>
</li>
<li>
<img src="dist/img/user2-160x160.jpg" alt="User Image">
<a class="users-list-name" href="#">Alexander</a>
<span class="users-list-date">13 Jan</span>
</li>
<li>
<img src="dist/img/user5-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">Sarah</a>
<span class="users-list-date">14 Jan</span>
</li>
<li>
<img src="dist/img/user4-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">Nora</a>
<span class="users-list-date">15 Jan</span>
</li>
<li>
<img src="dist/img/user3-128x128.jpg" alt="User Image">
<a class="users-list-name" href="#">Nadia</a>
<span class="users-list-date">15 Jan</span>
</li>
</ul>

</div>

<div class="card-footer text-center">
<a href="javascript:">View All Users</a>
</div>

</div>

</div>




                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>
                    </div>
                </form>
            </div>
                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $employees as $key => $employee )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $employee->emp_name }}</td>
                            <td scope="col">{{ $employee->emp_name2 }}</td>
                            <td scope="col">{{ $employee->dob }}</td>
                            <td scope="col">{{ $employee->phone }}</td>
                            <td scope="col">
                            <a href="{{  route('employee.edit', $employee->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" >remove</button>
                            </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
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