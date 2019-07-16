{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title> Home </title>--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"--}}
{{--          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
{{--    <script src="//code.jquery.com/jquery.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"--}}
{{--            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<nav class="navbar-default" role="navigation">--}}
{{--    <div class="navbar-header">--}}
{{--        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-ex1-collapse">--}}
{{--            <span class="sr-only"> Toggle navigation </span>--}}
{{--            <span class="icon-bar"></span>--}}
{{--            <span class="icon-bar"></span>--}}
{{--            <span class="icon-bar"></span>--}}
{{--        </button>--}}
{{--        <a class="navbar-brand" href="#"> Title </a>--}}
{{--    </div>--}}
{{--    <div class="collapse navbar-collapse navbar-ex1-collapse">--}}
{{--        <ul class="nav navbar-nav">--}}
{{--            <li class="active"><a href="#"> Main page </a></li>--}}
{{--            <li><a href="#"> Info </a></li>--}}
{{--        </ul>--}}
{{--        --}}{{--        <form class="navbar-form navbar-left" role="search">--}}
{{--        --}}{{--            <div class="form-group">--}}
{{--        --}}{{--                <input type="text" class="form-control" placeholder="Search">--}}
{{--        --}}{{--            </div>--}}
{{--        --}}{{--            <button type="submit" class="btn btn-default"> Submit</button>--}}
{{--        --}}{{--        </form>--}}
{{--        <ul class="nav navbar-nav navbar-right">--}}
{{--            <li class="dropdown">--}}
{{--                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Auth::user()->name}} <b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li><a href="#"> Log out </a></li>--}}
{{--                    --}}{{--                    <li><a href="#"> Another action </a></li>--}}
{{--                    --}}{{--                    <li><a href="#"> Something else here </a></li>--}}
{{--                    --}}{{--                    <li><a href="#"> Separated link </a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--</body>--}}
{{--</html>--}}

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home </title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"
          crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"> Main page </a></li>
                <li><a href="#"> Info </a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Auth::user() -> name}}<b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('login')}}"> Log in </a></li>
                        <li><a href="{{route('logout')}}"> Log out </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-collapse -->
</nav>
</body>
</html>
