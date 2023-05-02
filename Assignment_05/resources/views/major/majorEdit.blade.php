@extends('layout.app')

@section('content')

     <div class="panel-body border border-1 w-75 mt-5 me-0 ms-auto me-auto">
        <div class=" pt-3 pb-3 bg-light w-100 border border-1"><h4 class=" ms-4">Major Edit</h4></div>
            <form name="editForm" class="form-horizontal mt-3 mb-3 ms-4 me-4 ">
             <div class="form-group" >
                <input type="hidden" value='{{$major->id}}' name="majorId">
                 <label  class="col-sm-12 control-label text-dark">Name</label>

                 <div class="col-sm-12">
                     <input type="text" name="name"  class="form-control" value='{{$major->name}}'>
                 </div>
             </div>
             <div class="form-group mt-4">
                 <div class="d-flex justify-content-between">
                    <a href="#"  class="btn btn-secondary text-light" >Back</a>
                    <button type="submit" class="btn btn-primary text-light">Update</button>
                 </div>
             </div>
         </form>
     </div>
     <script>

            //update
            var editForm = document.forms['editForm'];
            var editName = editForm['name'];
            var editId = editForm['majorId'];
            editForm.onsubmit = function(e) {
                e.preventDefault();
                axios.put('/api/major/'+editId.value,{
                    name: editName.value,
                })
                     .then(response => {
                        window.location.assign('/majorShow')
                     })
                     .catch(err => {
                        console.log(err.response)
                    });
            }
     </script>
     @endsection
