@extends('frontend.template.master')

@section('title')

@stop

@section('body')
    <div class="row">

        @include('frontend.common.message')

        <div class="col-sm-12" style="padding: 50px;">
            <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" name="email" value="{{ !isset($email) ? ' ' : old('email') ? old('email') : $email }}" class="form-control" id="email" placeholder="请输入Email">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors->first('email') }}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">手機號碼</label>
                    <div class="col-sm-5">
                        <input type="text" name="phone" value="{{ !isset($phone) ? ' ' : old('phone') ? old('phone') : $phone }}" class="form-control" id="phone" placeholder="请输入手機號碼">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors->first('phone') }}</p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-2">
                        <input type="checkbox" id="accept_terms" name="accept_terms"  value="1">本人已閱讀、清楚了解及同意相關條款及細則。
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors->first('accept_terms') }}</p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-3 col-xs-3">
                        <button type="submit" class="btn btn-primary bt_submit">提交</button>
                    </div>
                    @if( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false )
                        <div class="col-sm-7 col-xs-7">
                            <a href="http://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzI2ODU2ODI3OQ==&scence=110#wechat_redirect"  class="btn btn-primary bt_submit">一键关注</a>
                        </div>
                    @endif
                </div>




            </form>
        </div>

    </div>
@stop

@section('js')
    <script>

    </script>
@stop