<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>


<div class="container">
    <di class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card mt-5 bg-light">
                <div class="card-content">
                    <h2 class="text-center text-success mt-4">My To Do List</h2>
                    <hr class="text-secondary my-1" style="margin: auto; width: 30%">
                    <div style="width: 55%; margin: auto" class="p-3 text-secondary tex-center">
                        <h5>Stay Motivated</h5>
                        <blockquote>
                            The road leading to a goal does not separate you from the destination; it is essentially a part of it.
                        </blockquote>
                        <hr class="text-secondary">
                    </div>
                    <div class="container">
                        @if (\Session::has('success'))
                            <div class="bg-success p-2 text-white text-center my-2" style="border-radius: 4px; font-weight: bold; font-size: 11px; line-height: 12px">
                                {!! \Session::get('success') !!}
                            </div>
                        @endif
                        <form action="/tasks" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input name="task" type="text" class="form-control" placeholder="Task....">
                                <input type="submit" value="Save" class="btn btn-outline-success" type="button" id="button-addon2">
                            </div>
                        </form>
                        <hr class="text-success my-3" style="margin: auto; width: 30%">
                        <div class="container shadow-sm bg-white">
                            @yield('content')
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </di>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
