<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="files/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="files/myapp.css" />


</head>

<body>

    <div class="background-container1">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5" style="margin-top: 70vh">
                    <a href="/questions"><button class="btn btn-primary" style="width: 150px">Lecture</button></a>
                    <a href="/start"><button class="btn btn-primary" style="width: 150px">Student</button></a>

                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>

    <script src="files/jquery.min.js"></script>
    <script src="files/popperjs.min.js"></script>
    <script src="files/bootstrap.min.js"></script>

</body>

</html>
