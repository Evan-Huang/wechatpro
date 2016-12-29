@extends('frontend.template.master')

@section('title','澳門漁人碼頭與你相約於Countdown Fever 2017 ')

@section('body')


    <div class="row" style="background-color: rgba(0,0,0,0.6);">

        {{--        @include('frontend.common.message')--}}

        <div class="col-sm-12">
            <div class="description text-center">
                <h4>
                    <u> 澳門漁人碼頭與你相約於Countdown Fever 2017 <br>
                        See You at Macau Fisherman’s Wharf Countdown Fever 2017</u>
                </h4>
                <br>
                <br>
                <br>
                <p>此活動已截止參加。<br>
                    This event has closed.</p>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="center">
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FMacauFishermansWharf&width=125&layout=button_count&action=like&size=small&show_faces=false&share=true&height=46&appId=240602902634336" width="125" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>

            <div class="center">
                <img src="{{ asset('images/wechat.png') }}" class="img-responsive center-block pull-left" style="height: 16px;">
                <span><a href="http://www.fishermanswharf.com.mo/tc/content/wechat.aspx">&nbsp;<u>WX_MFW</u></a></span><br>
                @if( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false )
                    <a href="http://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzI0MzE1NTkyOA==&scence=110#wechat_redirect"  class="btn btn-primary bt_submit">一鍵關注</a>
                @endif
            </div>

            <div class="center">
                <p>
                <a href="{{ url('/terms') }}"><u>條款與細則</u></a>&nbsp;
                <a href="{{ url('/terms') }}"><u>Terms and Conditions</u></a>
                </p>
            </div>

        </div>
    </div>

@stop

@section('js')
    <script>

    </script>
@stop