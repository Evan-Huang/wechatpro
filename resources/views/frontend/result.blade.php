@extends('frontend.template.master')

@section('title','即时结果')

@section('body')
<style>

    .center {
        width: auto;
        display: table;
        margin-left: auto;
        margin-right: auto;
    }
</style>

    <div class="row">

        <div class="col-sm-12" >
            <div class="text-center">
                <p>多謝參與，免費精美禮品電子換領券已發送至已登記的電子郵箱。<br>
                    澳門漁人碼頭Countdown Fever 2017見！</p><br>
                <p>Thank you. Please check your registered email box for the free souvenir e-ticket.<br>
                    See you at Macau Fisherman’s Wharf Countdown Fever 2017!
                </p><br>
            </div>
            <div>
                <div class="center">
                    <img src="{{ asset('images/facebook.png') }}" class="img-responsive center-block pull-left" style="height: 16px;">
                    <span><a href="https://www.facebook.com/MacauFishermansWharf/?fref=nf">&nbsp;<u>Macau Fisherman’s Wharf</u></a></span>
                </div>

                <div class="center">
                    <img src="{{ asset('images/wechat.png') }}" class="img-responsive center-block pull-left" style="height: 16px;">
                    <span><a href="http://www.fishermanswharf.com.mo/tc/content/wechat.aspx">&nbsp;<u>WX_MFW</u></a></span>
                </div>

            </div>
        </div>

    </div>

@stop

@section('js')
    <script>

    </script>
@stop