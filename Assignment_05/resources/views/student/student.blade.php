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
<div class=" pt-2 pb-2 bg-light w-100 border border-1  d-flex justify-content-between">
    <h4 class=" ms-4">Student Lists</h4>
        <div>
            <form action="{{url('/search')}}" class="form-inline my-2 my-lg-0 d-flex" type="get">
                <input type="search" class="form-control mr-sm-2 me-3" placeholder="search" name="query">
                <input type="submit" value="Search" class="btn btn-outline-primary my-2 my-sm-0 me-4">
            </form>
        </div>
</div>
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
    <tbody id="studentTableBody">

    </tbody>

</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<script>

//student
//Show
    axios.get('/api/student')
        .then(response =>{
            var studentTableBody = document.getElementById('studentTableBody');
            console.log(response);
            response.data.forEach(item=>{
                    studentTableBody.innerHTML +=
                '<tr>'+
                    '<td class="idlist">'+item.id+'</td>'+
                    '<td class="namelist">'+item.name+'</td>'+
                    '<td class="majorlist">'+item.subject+'</td>'+
                    '<td class="phonelist">'+item.phone+'</td>'+
                    '<td class="emaillist">'+item.email+'</td>'+
                    '<td class="addresslist">'+item.address+'</td>'+
                    '<td class="tablelist">'+
                    '<button class="btn btn-success btn-sm " onclick="studentEditBtn('+item.id+')">Edit</button>'+
                    '<button class="btn btn-danger btn-sm ms-2" onclick="studentDeleteBtn('+item.id+')"> Delete </button>'+
                    '</td>'+
                '</tr>';
            });
        })
        .catch(error => console.log(error));

        //Edit
             function studentEditBtn(editId) {
                axios.get('/api/student/'+editId+'/edit')
                     .then(response => {
                        window.location.assign('/api/student/'+editId+'/edit')
                     })
                     .catch(err => {
                    console.log(err.response)
                });
            }

        //Delete
        var namelist = document.getElementsByClassName('namelist');
        var majorlist = document.getElementsByClassName('majorlist');
        var phonelist = document.getElementsByClassName('phonelist');
        var emaillist = document.getElementsByClassName('emaillist');
        var addresslist = document.getElementsByClassName('addresslist');
        var tablelist = document.getElementsByClassName('tablelist');
        var idlist = document.getElementsByClassName('idlist');
        function studentDeleteBtn(deleteId) {
                if (confirm('Sure to delete?')) {
                    axios.delete('/api/student/'+deleteId)
                     .then(response => {
                        console.log(response.data.deletedStudent.name);
                        for (var i=0; i<namelist.length; i++) {
                            if (namelist[i].innerHTML == response.data.deletedStudent.name) {
                                idlist[i].style.display = 'none';
                                namelist[i].style.display = 'none';
                                majorlist[i].style.display = 'none';
                                phonelist[i].style.display = 'none';
                                emaillist[i].style.display = 'none';
                                addresslist[i].style.display = 'none';
                                tablelist[i].style.display = 'none';
                            }
                        }
                     })
                     .catch(err => {
                        console.log(err.response)
                    });

                }

            }

</script>

@endsection
