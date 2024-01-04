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
        <link rel="stylesheet" type="text/css" href="files\bootstrap.min.css" />
        <link href="files\myapp.css" rel="stylesheet" type="text/css"/>


    </head>

    <body>

        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-1"><h2>Users <b></b></h2></div>
                            <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button></div>
                            <div class="col-sm-4">
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Question <i class="fa fa-sort"></i></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ვინ დაარსა თბილისი ?</td>
                                <td>
                                    <a href="#" class="text-warning"  data-toggle="tooltip" data-toggle="modal" data-target="#Modal_update">Update</a>
                                    <a href="#" class="text-danger"  data-toggle="tooltip" >Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
        
                </div>
            </div>
        </div>

        <!-- Modal-Add -->
        <div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="/add">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Questions</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        
        {{-- <script src="files/jquery.min.js"></script>
        <script src="files/popperjs.min.js"></script>
        <script src="files/bootstrap.min.js"></script> --}}
    </body>
    
</html>
