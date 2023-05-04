@extends('layout.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class=" w-75 mt-3 me-0 ms-auto me-auto">
    <div class="d-flex justify-content-between w-100">
        <a href="{{route('student#create')}}" class="btn btn-primary ">Create</a>
        <div class="d-flex">
        <a href="{{route('student#export')}}" class="btn btn-primary">Export</a>

        <button type="button" class="btn btn-primary ms-3" data-toggle="modal" data-target="#importModal">Import</button>

        </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">IMPORT</h5>
        <button type="button" class="btn-close" data-dismiss="modal" ></button>
      </div>
    <form action="{{route('student#import')}}" method="post" enctype="multipart/form-data" class="d-flex">
            @csrf
      <div class="modal-body">
      <div class="form-group  border border-1 ms-2 p-2">
            <input type="file" name="file" class="ms-2">
        </div>
        <div class="form-group text-end">
         <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </div>

      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Import</button>-->
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
