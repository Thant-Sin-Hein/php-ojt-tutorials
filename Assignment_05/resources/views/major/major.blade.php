@extends('layout.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container ">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="#">Navbar</a>
            <p class="pt-2">
                <a href="{{route('student#show')}}" class="text-secondary" style="text-decoration:none;"> Students</a>
                <a href="{{route('major#show')}}" class="text-dark ms-2" style="text-decoration:none;"> Majors</a>
            </p>
        </div>
    </div>
</nav>

<div class=" w-75 mt-3 me-0 ms-auto me-auto">
    <a href="{{route('major#create')}}" class="btn btn-primary">Create</a>
</div>
<div class="panel-body border border-1 w-75 mt-3 me-0 ms-auto me-auto">
    <div class=" pt-2 pb-2 bg-light w-100 border border-1"><h4 class=" ms-4">Major Lists</h4></div>
    <table class="table table-striped task-table ms-auto me-auto" style="width:95%;">

    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </thead>
    <tbody id="tableBody">

    </tbody>
</table>
</div>

@endsection
