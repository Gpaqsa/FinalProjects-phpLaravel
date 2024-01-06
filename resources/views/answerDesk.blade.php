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

<body class="antialiased">

    <div class="background-container12">

        <div class="container-fluid" style="padding-top: 30px; color: black; d-flex flex-column">
            <form method="post" action="/submitAnswer">
                @csrf
                <div class="col-md-3"></div>
                <div class="col-md-4" style="margin:20px; d-flex flex-column">
                    <h3>#{{ Session::get('nextQuestion') }} {{ $question->question }} ?</h3> <br />
                    <input value="a" checked="true" name="answer" type="radio" style="margin:5px"> (A)
                    <small></small>{{ $question->a }}</small> ; <br />
                    <input value="b" name="answer" type="radio" style="margin:5px"> (B)
                    <small></small>{{ $question->b }}</small> ;
                    <br />
                    <input value="c" name="answer" type="radio" style="margin:5px"> (C)
                    <small></small>{{ $question->c }}</small> ;
                    <br />
                    <input value="d" name="answer" type="radio" style="margin:5px"> (D)
                    <small></small>{{ $question->d }}</small> ;
                    <br />
                    <input value="{{ $question->answer }}" style="visibility: hidden"; name="dbanswer" />
                </div>
                <div class="col-md-5"></div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </form>
        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
