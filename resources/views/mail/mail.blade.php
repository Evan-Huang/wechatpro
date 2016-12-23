@extends('frontend.template.master')

@section('title','電郵')

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
            <div class="text-left">
                <p>編號 No. 16{{ sprintf("%04d", $id) }}</p><br>
                <p>請於2016年12月31日晚上7時30分至10時期間，帶同此電郵親臨澳門漁人碼頭換領免費精美禮品一份。</p><br>
                <p>澳門漁人碼頭Countdown Fever 2017見！</p><br>
                <p>Please claim your souvenir with this email notification at Macau Fisherman’s Wharf from 7:30pm to 10:00pm on 31st December, 2016.</p><br>
                <p>See You at Macau Fisherman’s Wharf Countdown Fever 2017!</p><br>
            </div>
            <div>
                <p>保持聯絡 Stay in touch:</p>

                <div class="">
                    <img src="{{ asset('images/facebook.png') }}" class="img-responsive center-block pull-left" style="height: 16px;">
                    <span><a href="https://www.facebook.com/MacauFishermansWharf/?fref=nf">&nbsp;<u>Macau Fisherman’s Wharf</u></a></span>
                </div>

                <div class="">
                    <img src="{{ asset('images/wechat.png') }}" class="img-responsive center-block pull-left" style="height: 16px;">
                    <span><a href="http://www.fishermanswharf.com.mo/tc/content/wechat.aspx">&nbsp;<u>WX_MFW</u></a></span>
                </div>
                <br>
            </div>
        </div>

    </div>

@stop

@section('js')
    <script>

    </script>
@stop