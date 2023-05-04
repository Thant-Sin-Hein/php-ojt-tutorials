@extends('layout.app')

@section('content')

<div class=" w-75 mt-3 me-0 ms-auto me-auto">
    <a href="{{route('major#create')}}" class="btn btn-primary">Create</a>
</div>
<div class="panel-body border border-1 w-75 mt-3 me-0 ms-auto me-auto">
    <div class=" pt-2 pb-2 bg-light w-100 border border-1"><h4 class=" ms-4">Major Lists</h4></div>
    <table class="table table-striped task-table ms-auto me-auto" style="width:95%;">

    <thead class=>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($major as $majors)
            <tr>
                <!-- Task Name -->
                <td class="table-text">
                    <div>{{ $majors->id }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $majors->name }}</div>
                </td>

                <td>
                <form action="{{ url('major-show/'.$majors->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('major-edit/'.$majors->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                     <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
