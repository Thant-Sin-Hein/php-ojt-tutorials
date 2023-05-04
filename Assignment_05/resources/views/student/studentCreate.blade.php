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
     <div class="panel-body border border-1 w-75 mt-5 me-0 ms-auto me-auto">
        <div class=" pt-3 pb-3 bg-light w-100 border border-1"><h4 class=" ms-4">Student Create</h4></div>
         <form name="studentForm" class="form-horizontal mt-3 mb-3 ms-4 me-4 ">

             <div class="form-group">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Name</label>

                 <div class="col-sm-12">
                     <input type="text" name="name" id="task-name" class="form-control" placeholder="name">
                 </div>
             </div>
             <span  id="nameError" ></span>

             <div class="form-group">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Major</label>

                 <div class="col-sm-12">
                 <select class="form-select" aria-label="Default select example" name="major">
                 @foreach ($major as $majors)
                    <option value=" {{ $majors->id }}">
                        {{ $majors->name }} </option>
                @endforeach
                </select>
                 </div>
             </div>

             <div class="form-group mt-2">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Phone</label>

                 <div class="col-sm-12">
                     <input type="number" name="phone" id="task-name" class="form-control" placeholder="09**********">
                 </div>
             </div>
             <span  id="phoneError" ></span>


             <div class="form-group mt-2">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Email</label>

                 <div class="col-sm-12">
                     <input type="email" name="email" id="task-name" class="form-control" placeholder="example@gmail.com">
                 </div>
             </div>
             <span  id="emailError" ></span>

             <div class="form-group mt-2">
                 <label for="task" class="col-sm-12 control-label text-dark mb-2">Address</label>

                 <div class="col-sm-12">
                     <textarea name="address" id="" cols="10" rows="2" class="w-100 form-control"></textarea>
                 </div>
             </div>
             <span  id="addressError" ></span>

             <div class="form-group mt-4">
                 <div class="d-flex justify-content-between">
                    <a href="#"  class="btn btn-secondary text-light" >Back</a>
                     <button type="submit" class="btn btn-primary text-light">Create</button>
                 </div>
             </div>
         </form>
     </div>
     <script>
    //Create
            var studentForm = document.forms['studentForm'];
            var studentName = studentForm['name'];
            var studentSubject = studentForm['major'];
            var studentPhone = studentForm['phone'];
            var studentEmail = studentForm['email'];
            var studentAddress = studentForm['address'];

            studentForm.onsubmit = function(e) {
                e.preventDefault();
                axios.post('/api/student',{
                    name : studentName.value,
                    major : studentSubject.value,
                    phone : studentPhone.value,
                    email : studentEmail.value,
                    address : studentAddress.value,
                })
                .then(response => {
                    if (response.data.mail == 'Your mail is found') {
                        alert('your email is found');
                        if (response.data.msg == 'success') {
                            window.location.assign('/');
                        }
                        else {
                            var nameErr = document.getElementById('nameError');
                            var phoneErr = document.getElementById('phoneError');
                            var emailErr = document.getElementById('emailError');
                            var addressErr = document.getElementById('addressError');

                            nameErr.innerHTML = studentName.value == '' ? '<i class="text-danger">'+response.data.msg.name+'</i>': '';
                            phoneErr.innerHTML = studentPhone.value == '' ? '<i class="text-danger">'+response.data.msg.phone+'</i>': '';
                            emailErr.innerHTML = studentEmail.value == '' ? '<i class="text-danger">'+response.data.msg.email+'</i>': '';
                            addressErr.innerHTML = studentAddress.value == '' ? '<i class="text-danger">'+response.data.msg.address+'</i>': '';
                        }

                    }else {
                        alert('your email is not found');
                    }

                })
                .catch(err => {
                    console.log(err.response)
                });
            }


     </script>
     @endsection
