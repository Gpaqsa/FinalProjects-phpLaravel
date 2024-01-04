<h3 style="text-align: center; margin-top: 50px">ფინალურის პროექტი გიორგი პაქსაშვილი</h3>


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

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="margin-top: 20vh">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{$error}}
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    @endforeach

                    @if (Session::get('successMessage'))
                    <div class="alert alert-success  alert-dismissible fade show" role="alert">
                        <strong>Success !</strong> {{Session::get('successMessage')}}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        <?php Session::forget('successMessage'); ?>
                    @endif
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

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
                            @foreach($questions as $qu)
                                <tr>
                                    <td>{{$loop->index}}</td>
                                    <td>{{$qu->question}} ?</td>
                                    <td>
                                        <a href="#" class="text-warning" data-toggle="modal" data-target="#Modal_update{{$qu->id}}">Update</a>
                                        <a href="#" class="text-danger"  data-toggle="tooltip" >Delete</a>
                                    </td>
                                </tr>
                            @endforeach
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
                            <input style="visibility: hidden;" name="id" value="{{$qu->id}}"/>
                            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <label for="" class="newQuestionlabel" style="margin: 0px">Question: </label>
                                <input type="text" name="question" style="width: 100%-20%">
                            </div>
                            <div class="row">
                                <div class="col-md-6">A: </div>
                                <div class="col-md-6">B: </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-6"><input type="text" name="opta"></div>
                                <div class="col-md-6"><input type="text" name="optb"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">C: </div>
                                <div class="col-md-6">D: </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-6"><input type="text" name="optc"></div>
                                <div class="col-md-6"><input type="text" name="optd"></div>
                            </div>

                            <div class="row">
                                <div class="col md-3"> 
                                    <label for="">Answer: </label>
                                    <select name="answer" class="form-control">
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                        <option value="d">D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Questions</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
        <!-- Modal-Update -->
    <div class="modal fade" id="Modal_update{{$qu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label for="" class="newQuestionlabel" style="margin: 0px">Question: </label>
                    <input type="text" name="question" value="{{$qu->question}}" style="width: 100%-20%">
                </div>
                <div class="row">
                    <div class="col-md-6">A: </div>
                    <div class="col-md-6">B: </div>
                </div>
                <div class="row" >
                    <div class="col-md-6"><input type="text" value="{{$qu->a}}"name="opta"></div>
                    <div class="col-md-6"><input type="text" value="{{$qu->b}}" name="optb"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">C: </div>
                    <div class="col-md-6">D: </div>
                </div>
                <div class="row" >
                    <div class="col-md-6"><input type="text" value="{{$qu->c}}" name="optc"></div>
                    <div class="col-md-6"><input type="text" value="{{$qu->d}}" name="optd"></div>
                </div>

                <div class="row">
                    <div class="col md-3"> 
                        <label for="">Answer: </label>
                        <select name="answer" class="form-control">
                            <option value="{{$qu->answer}}">{{$qu->answer}}</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Update changes</button>
            </div>
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
