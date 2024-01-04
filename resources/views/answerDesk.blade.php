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
                <div class="col-md-3"></div>
                <div class="col-md-4" style="margin:20px; d-flex flex-column">
                    <h3>#1 ვინ დაარსა თბილისი ?</h3> <br/>
                    <input checked="true" name="answer" type="radio" style="margin:5px"> (A) <small></small>ვახტანგ გორგასალი</small> ; <br/>
                    <input name="answer" type="radio" style="margin:5px"> (B) <small></small>ივანე ჯავახიშვილი</small> ; <br/>
                    <input name="answer" type="radio" style="margin:5px"> (C) <small></small>გალაკტიონ ტაბიძე</small> ; <br/>
                    <input name="answer" type="radio" style="margin:5px"> (D) <small></small>ნოე ჟორდანია</small> ; <br/>
                    <input value="" style="visibility: hidden"; name="dbanswer"/>
                </div>
                <div class="col-md-5"></div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <a href="#"><button class="btn btn-primary">Next</button></a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
   
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </body>
</html>
