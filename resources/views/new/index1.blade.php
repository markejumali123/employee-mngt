@extends('layouts.app')
@section('content')
<<<<<<< HEAD




    <div class="container">
        <h3 align="center" class="mt-5">Hello Hikarat</h3>
        <div class="row">
=======
<table class="table mt-5">
    <button><a href="http://127.0.0.1:8000/pages" class="small-box-footer">Add<i class="fas fa-arrow-circle-right"></i></a></button>
</table>

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
                  
>>>>>>> e873dcff59e1e6b89c7167a0893fb3866b28e7d0
            
@endsection
