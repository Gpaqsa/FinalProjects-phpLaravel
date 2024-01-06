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




    <div class="container-fluid" style="margin-top: 50px; margin-left: 20px">
        <div class="row">
            <div class="4"></div>
            <div class="col-md-4">
                <label>Correct: <small>{{Session::get("correctAnswer");}}</small></label>
                <label>InCorrect: <small>{{Session::get("wrongAnswer");}}</small></label>
                <label>Result: <small>{{Session::get("correctAnswer");}}/{{Session::get("correctAnswer");}}-{{Session::get("wrongAnswer");}}</small></label>

                <h3 class="cont">ქვიზის დასრულება</h3>
                <a href="/"><button style="padding: 10px; margin:20px" class="btn btn-primary">Finish
                        Quiz</button></a>
                <div class="text-center"><a href="/">Home ?!</a></div>
            </div>
            <div class="4"></div>
        </div>
        {{-- <div style="width:100wv; height: 100vh">
            <img src="../Public/images/QuizTime.png" alt="quizTime" style="width: 100vw; height:auto;"/>
        </div> --}}
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
