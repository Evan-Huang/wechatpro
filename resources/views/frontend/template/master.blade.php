<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <meta property="og:url"           content="https://{{ $_SERVER['HTTP_HOST'] }}{{ $_SERVER['REQUEST_URI'] }}" />
    <meta property="og:type"           content="website" />
    <meta property="og:title"         content="" />
    <meta property="og:description"   content="" />

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container" style="max-width: 750px">
    <div class="row" style="padding-bottom: 30px;">
        <div class="col-sm-12">
            <div>
                <img src="{{ asset('images/logo.jpg') }}" alt="" class="img-responsive center-block">
            </div>
            <div class="header-title text-center">
                <u><h5><b>澳門漁人碼頭與你相約於Countdown Fever 2017
                            <br>
                            See You at Macau Fisherman’s Wharf Countdown Fever 2017 </b></h5></u>
            </div>
        </div>
    </div>
    @yield('body')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@yield('js')
</body>
</html>