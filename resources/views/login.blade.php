{{-- @extends('layout/layout_main')
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


<!-- Styles -->
<link rel="stylesheet" type="text/css" href="files\bootstrap.min.css" />
<link href="files\myapp.css" rel="stylesheet" type="text/css" />


@section('register_space')

    <h1>შესვლა ( Login )</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ $error }}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif

    <form action="{{ route('login') }}" method="GET">
        @csrf

        <input type="email" name="email" placeholder="Enter email">
        <br><br>
        <input type="password" name="password" placeholder="Enter password">
        <br><br>

        <input type="submit" value="Register">
    </form>
@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
