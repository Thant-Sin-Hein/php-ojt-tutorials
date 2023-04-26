@extends('layout.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container ">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="#">Navbar</a>
            <p class="pt-2">
                <a href="{{route('student#show')}}"  class="text-dark ms-2" style="text-decoration:none;"> Students</a>
                <a href="{{route('major#show')}}" class="text-secondary" style="text-decoration:none;"> Majors</a>
            </p>
        </div>
    </div>
</nav>

<div class=" w-75 mt-3 me-0 ms-auto me-auto">
    <div class="d-flex justify-content-between w-100">
        <a href="{{route('student#create')}}" class="btn btn-primary">Create</a>
        <div class="d-flex">
        <a href="{{route('student#export')}}" class="btn btn-primary">Export</a>
        <form action="{{route('student#import')}}" method="post" enctype="multipart/form-data" class="d-flex">
            @csrf
            <div class="form-group  border border-1 ms-2">
                <input type="file" name="file" class="ms-2">
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
        </div>
    </div>

</div>
<div class="panel-body border border-1 w-75 mt-3 me-0 ms-auto me-auto">
    <div class=" pt-2 pb-2 bg-light w-100 border border-1"><h4 class=" ms-4">Student Lists</h4></div>
    <table class="table table-striped task-table ms-auto me-auto" style="width:95%;">

    <thead class=>
        <th>ID</th>
        <th>Name</th>
        <th>Major</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($student as $students)
            <tr>
                <!-- Task Name -->
                <td class="table-text">
                    <div>{{ $students->id }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $students->name }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $students->subject }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $students->phone }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $students->email }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $students->address }}</div>
                </td>

                <td>
                <form action="{{ url('/'.$students->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('studentEdit/'.$students->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                     <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
