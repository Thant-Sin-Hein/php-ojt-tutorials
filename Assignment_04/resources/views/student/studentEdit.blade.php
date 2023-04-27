@extends('layout.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container ">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="#">Navbar</a>
            <p class="pt-2">
                <a href="{{route('student#create')}}"  class="text-dark ms-2" style="text-decoration:none;"> Students</a>
                <a href="{{route('major#create')}}" class="text-secondary" style="text-decoration:none;"> Majors</a>
            </p>
        </div>
    </div>
</nav>
     <!-- Bootstrap Boilerplate... -->
     <div class="panel-body border border-1 w-75 mt-5 me-0 ms-auto me-auto">
        <div class=" pt-3 pb-3 bg-light w-100 border border-1"><h4 class=" ms-4">Student Update</h4></div>
         <!-- New Task Form -->
         <form action="{{ url('studentEdit/'.$user->id) }}" method="POST" class="form-horizontal mt-3 mb-3 ms-4 me-4 ">
             {{ csrf_field() }}
             @method('PUT')
             <!-- Task Name -->
             <div class="form-group">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Name</label>

                 <div class="col-sm-12">
                     <input type="text" name="name" id="task-name" class="form-control" placeholder="name" value="{{$user->name}}">
                 </div>
             </div>
             @error('name')
                <span class="text-danger">{{ $message }}</span>
             @enderror

             <div class="form-group">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Major</label>

                 <div class="col-sm-12">
                 <select class="form-select" aria-label="Default select example" name="major">
                 @foreach ($major as $majors)
                    <option value=" {{ $majors->id }}">
                        {{ $majors->name }}
                    </option>
                @endforeach
                </select>
                 </div>
             </div>
             @error('major')
                <span class="text-danger">{{ $message }}</span>
             @enderror

             <div class="form-group mt-2">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Phone</label>

                 <div class="col-sm-12">
                     <input type="number" name="phone" id="task-name" class="form-control" placeholder="09**********" value="{{$user->phone}}">
                 </div>
             </div>
             @error('phone')
                <span class="text-danger">{{ $message }}</span>
             @enderror


             <div class="form-group mt-2">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Email</label>

                 <div class="col-sm-12">
                     <input type="email" name="email" id="task-name" class="form-control" placeholder="example@gmail.com" value="{{$user->email}}">
                 </div>
             </div>
             @error('email')
                <span class="text-danger">{{ $message }}</span>
             @enderror

             <div class="form-group mt-2">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Address</label>

                 <div class="col-sm-12">
                     <textarea name="address" id="" cols="10" rows="2" class="w-100 form-control">{{$user->address}}</textarea>
                 </div>
             </div>
             @error('address')
                <span class="text-danger">{{ $message }}</span>
             @enderror
             <div class="form-group mt-4">
                 <div class="d-flex justify-content-between">
                    <a href="#"  class="btn btn-secondary text-light" >Back</a>
                     <button type="submit" class="btn btn-primary text-light">Update</button>
                 </div>
             </div>
         </form>
     </div>
     @endsection
