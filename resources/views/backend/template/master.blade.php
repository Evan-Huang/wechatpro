<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - 後台管理系統</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    
    </style>
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    後台管理系統
                </a>
            </div>

            <div class="navbar-collapse collapse navbar-right" id="navbar-items">
                <ul class="nav navbar-nav">

                    <li class="visible-xs{!! strpos(Route::current()->getName(), 'backend.home') !== FALSE ? ' active' : '' !!}">
                        <a href="{{ action('Backend\HomeController@index') }}">後台首頁</a>
                    </li>

                    <li>
                        <a href="{{ action('Backend\AuthController@logout') }}">退出</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li{!! strpos(Route::current()->getName(), 'backend.home') !== FALSE ? ' class="active"' : '' !!}>
                        <a href="{{ action('Backend\HomeController@index') }}">後台首頁</a>
                    </li>
                </ul>

                <ul class="nav nav-sidebar">
                    <li{!! strpos(Route::current()->getName(), 'backend.report.') !== FALSE ? ' class="active"' : '' !!}>
                        <a href="{{ action('Backend\ReportController@index') }}">報表 (活動)</a>
                    </li>

                    {{--<li{!! strpos(Route::current()->getName(), 'backend.report2.') !== FALSE ? ' class="active"' : '' !!}>--}}
                        {{--<a href="{{ action('Backend\Report2Controller@index') }}">報表 (遊戲2)</a>--}}
                    {{--</li>--}}

                    {{--<li{!! strpos(Route::current()->getName(), 'backend.report3.') !== FALSE ? ' class="active"' : '' !!}>--}}
                        {{--<a href="{{ action('Backend\Report3Controller@index') }}">報表 (遊戲3)</a>--}}
                    {{--</li>--}}
                </ul>

                <ul class="nav nav-sidebar">
                    <li{!! strpos(Route::current()->getName(), 'backend.user') !== FALSE ? ' class="active"' : '' !!}>
                        <a href="{{ action('Backend\UserController@index') }}">系統用戶</a>
                    </li>
                </ul>

            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h2 class="page-header">
                    <div class="row">
                        <div class="col-sm-8">
                            @yield('pagetitle', '標題')
                        </div>

                        <div class="col-sm-4 text-right">
                            @yield('pagetitleright', '')
                        </div>
                    </div>
                </h2>

                @yield('body')

            </div>
        </div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('js')

</body>
</html>