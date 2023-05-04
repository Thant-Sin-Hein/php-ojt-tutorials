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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container ">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="{{route('student#show')}}">Navbar</a>
            <p class="pt-2">
                <a href="{{route('student#show')}}"  class="text-dark" style="text-decoration:none;" > Students</a>
                <a href="{{route('major#show')}}"  class="text-secondary" style="text-decoration:none;" > Majors</a>
            </p>
        </div>
    </div>
</nav>
    @yield('content')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
