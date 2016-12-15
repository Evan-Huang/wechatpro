<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用戶登入 - 後台管理系統</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    用戶登入 - 後台管理系統
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row" style="margin-top: 80px">
            <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                {!! Form::open( array('url' => action('Backend\AuthController@postLogin'), 'method' => 'post'), array('role' => 'form') ) !!}
                    <div class="form-group">
                        <label for="login-username">用戶名稱</label>
                        {!! Form::text('username', '', array('class' => 'form-control', 'id' => 'login-username')) !!}
                    </div>
                    <div class="form-group">
                        <label for="login-password">用戶密碼</label>
                        {!! Form::password('password', array('class' => 'form-control', 'id' => 'login-password')) !!}
                    </div>

                    @if( Session::get('error') )
                    <p class="bg-danger" style="background: red; color: #fff; padding: 4px">
                        用戶名稱或密碼錯誤
                    </p>
                    @endif

                    <button type="submit" class="btn btn-info btn-block">登入</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>