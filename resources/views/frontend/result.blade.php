@extends('frontend.template.master')

@section('title','澳門漁人碼頭與你相約於Countdown Fever 2017 ')

@section('body')
<style>

    .center {
        width: auto;
        display: table;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="row" style="padding: 30px; background-color: rgba(0,0,0,0.6);">
    <div class="col-sm-12">
        <div class="header-title text-center">
            <u><h3><b>澳門漁人碼頭與你相約於Countdown Fever 2017
                        <br>
                        See You at Macau Fisherman’s Wharf Countdown Fever 2017 </b></h3></u>
        </div>
    </div>


        <div class="col-sm-12" >
            <div class="text-center">
                <p>
                    多謝參與，精美禮品電子換領券已發送至已登記的電子郵箱，<br>“除夕倒數抽獎”結果將於12月31日公佈。請關注我們獲取最新消息！
                    <br>
                    Thank you. Please check your registered email box for the souvenir e-ticket. <br> The “Countdown Fever Lucky Draw” results will be announced on 31st December.
                    <br> Please follow us for the latest information!

                </p>
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