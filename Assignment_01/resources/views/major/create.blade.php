@extends('layout.app')

@section('content')

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
                    <a href="{{route('major#show')}}"  class="btn btn-secondary text-light" >Back</a>
                     <button type="submit" class="btn btn-primary text-light">Create</button>
                 </div>
             </div>
         </form>
     </div>
     @endsection
