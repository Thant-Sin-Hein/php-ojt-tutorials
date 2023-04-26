@extends('layout.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container ">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="#">Navbar</a>
            <p class="pt-2">
                <a href="{{route('student#create')}}" class="text-secondary" style="text-decoration:none;"> Students</a>
                <a href="{{route('major#create')}}" class="text-dark ms-2" style="text-decoration:none;"> Majors</a>
            </p>
        </div>
    </div>
</nav>
     <div class="panel-body border border-1 w-75 mt-5 me-0 ms-auto me-auto">
        <div class=" pt-3 pb-3 bg-light w-100 border border-1"><h4 class=" ms-4">Major Create</h4></div>
         <form action="{{route('major#store')}}" method="POST" class="form-horizontal mt-3 mb-3 ms-4 me-4 ">
             {{ csrf_field() }}
             <div class="form-group">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Name</label>

                 <div class="col-sm-12">
                     <input type="text" name="name" id="task-name" class="form-control" placeholder="name">
                 </div>
             </div>
             @error('name')
                <span class="text-danger">{{ $message }}</span>
             @enderror
             <div class="form-group mt-4">
                 <div class="d-flex justify-content-between">
                    <a href="#"  class="btn btn-secondary text-light" >Back</a>
                     <button type="submit" class="btn btn-primary text-light">Create</button>
                 </div>
             </div>
         </form>
     </div>
     @endsection
