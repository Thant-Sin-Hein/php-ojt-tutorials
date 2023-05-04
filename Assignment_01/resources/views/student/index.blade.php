@extends('layout.app')

@section('content')

<div class=" w-75 mt-3 me-0 ms-auto me-auto">
    <a href="{{route('student#create')}}" class="btn btn-primary">Create</a>
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
                    <a href="{{ url('student-edit/'.$students->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                     <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
