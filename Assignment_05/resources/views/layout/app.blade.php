<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    @yield('content')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script>
        var nameList = document.getElementsByClassName('namelist');
        var tableList = document.getElementsByClassName('tablelist');
        var idList = document.getElementsByClassName('idlist');

        //show
        axios.get('/api/major')
            .then(response =>{
                var tableBody = document.getElementById('tableBody');

                response.data.forEach(item=>{
                    tableBody.innerHTML +=
                '<tr>'+
                    '<td class="idlist">'+item.id+'</td>'+
                    '<td class="namelist">'+item.name+'</td>'+
                    '<td class="tablelist">'+
                    '<button class="btn btn-success btn-sm " onclick="editBtn('+item.id+')">Edit</button>'+
                    '<button class="btn btn-danger btn-sm ms-2" onclick="deleteBtn('+item.id+')"> Delete </button>'+
                    '</td>'+
                '</tr>';
            });

            })
            .catch(error => console.log(error));

            //Create
            var myForm = document.forms['myForm'];
            var majorName = myForm['name'];

            myForm.onsubmit = function(e) {
                e.preventDefault();
                axios.post('/api/major',{
                    name : majorName.value,
                })
                .then(response => {
                    if (response.data.msg == 'success') {
                        window.location.assign('/majorShow')
                    }
                    else {
                        var nameErr = document.getElementById('nameError');
                        console.log(nameErr);
                        nameErr.innerHTML = majorName.value == '' ? '<i class="text-danger">'+response.data.msg.name+'</i>': '';
                    }

                })
                .catch(err => {
                    console.log(err.response)
                });
            }

            //Edit
            function editBtn(editId) {
                axios.get('/api/major/'+editId+'/edit')
                     .then(response => {
                        window.location.assign('/api/major/'+editId+'/edit')
                     })
                     .catch(err => {
                    console.log(err.response)
                });
            }

            //delete
            function deleteBtn(deleteId) {
                if (confirm('Sure to delete?')) {
                    axios.delete('/api/major/'+deleteId)
                     .then(response => {
                        console.log(response);
                        for (var i=0; i < nameList.length; i++) {
                            if (nameList[i].innerHTML == response.data.deletedMajor.name) {
                                nameList[i].style.display = 'none';
                                tableList[i].style.display = 'none';
                                idList[i].style.display = 'none' ;
                            }
                        }
                     })
                     .catch(err => {
                        console.log(err.response)
                    });

                }

            }

    </script>
</body>

</html>
