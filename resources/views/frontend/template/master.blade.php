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
    <style>

        .form-horizontal {
            color: #ffffff;
            font-weight: 300;
        }

        .center {
            width: auto;
            display: table;
            margin-left: auto;
            margin-right: auto;
        }

        .description {
            padding: 10px;
        }

        label {
            color: #ffffff;
        }

        a {
            color: #ffffff;
        }

        .main_bg{
            padding-top:330px;
            max-width: 750px;
            background-position:top center;
            background-image: url({{ asset('images/bg.jpg') }});
            background-size: cover;
        }

        @media screen and (max-width:768px){
            .main_bg{
                padding-top:280px;
                background-size: 170%;
            }
        }

        @media screen and (max-width:320px){
            .main_bg{
                padding-top:220px;
                background-size: 170%;
            }
        }

    </style>
</head>
<body style="background-color: #000000; color:#ffffff; max-width: 750px; margin: auto; padding-bottom: 40px;">
<div class="container main_bg">
    @yield('body')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@yield('js')
</body>
</html>