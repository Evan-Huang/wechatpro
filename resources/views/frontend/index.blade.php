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
                <p>填寫有效電郵地址即獲免費精美禮品電子換領券 <br>
               Fill in a valid email address for a free souvenir e-ticket</p>
            </div>
            <form class="form-horizontal" action="" method="POST">
                <div class="col-sm-12 hide">
                    <div class="form-group">
                        <label for="name" class="control-label">姓名 Name</label>
                        <input type="text" name="clientname"
                               value="{{ !isset($clientname) ? ' ' : old('clientname') ? old('clientname') : $clientname }}"
                               class="form-control" id="clientname" placeholder="請輸入姓名 Name">
                        @if($errors->first('clientname'))<p
                                class="form-control-static text-danger">{{ $errors->first('clientname') }}</p>@endif
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name" class=" control-label">電郵 Email</label>
                        <input type="text" name="email"
                               value="{{ !isset($email) ? ' ' : old('email') ? old('email') : $email }}"
                               class="form-control" id="email" placeholder="請輸入電郵 Email">
                        @if($errors->first('email'))<p
                                class="form-control-static text-danger">{{ $errors->first('email') }}</p>@endif
                    </div>
                </div>
                <div class="col-sm-12 {{ session('lucky_draw') ? 'hide' : '' }}">
                    <p class="text-center">同時填寫電話號碼更會自動參加”除夕倒數抽獎” <br>
                        Fill in your phone number as well to entre the “Countdown Fever Lucky Draw”
                    </p>
                </div>

                <div class="col-sm-12 {{ session('lucky_draw') ? '' : 'hide' }}">
                    <p class="text-center">”除夕倒數抽獎”已截止參加。<br>
                        Entry to the “Countdown Fever Lucky Draw” has closed.
                    </p>
                </div>
                    <div class="col-sm-12 {{ session('lucky_draw') ? 'hide' : '' }}">
                        <div class="form-group">
                            <label for="name" class="control-label" style="text-align: left">手提電話 (區號+號碼)<br>
                                Mobile Phone (Area code + number)
                            </label>
                            <input type="text" name="phone"
                                   value="{{ !isset($phone) ? ' ' : old('phone') ? old('phone') : $phone }}"
                                   class="form-control" id="phone" placeholder="請輸入手提電話 (區號+號碼)">
                            @if($errors->first('phone'))<p
                                    class="form-control-static text-danger">{{ $errors->first('phone') }}</p>@endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="checkbox" checked id="accept_terms1"
                                   name="accept_terms1" value="1" style="float:left;">
                            <p>&nbsp;勾選此方格表示本人同意澳門勵駿創建有限公司及其附屬公司使用上述資料聯絡本人，發送有關澳門漁人碼頭及澳門勵駿創建有限公司成員的優惠及推廣信息。本人明白本人有權撤銷上述同意以及取消訂閱信息。<br> By checking this box, I agree that Macau Legend Development Ltd. and its affiliates may use this information to contact me about offers, promotions and special events from Macau Fisherman’s Wharf and the affiliates of Macau Legend. I understand that I have the option to withdraw my consent and opt out.
                            </p>
                            @if($errors->first('accept_terms1'))<p
                                    class="form-control-static text-danger">{{ $errors->first('accept_terms1') }}</p>@endif

                            <input type="checkbox" checked id="accept_terms2"
                                   name="accept_terms2" value="1" style="float:left;">
                            <p>&nbsp;勾選此方格表示本人亦已閱讀及瞭解有關<a href="{{ url('/terms') }}"><u>條款與細則</u></a>。By checking
                                this box, I have also viewed the <a href="{{ url('/terms') }}"><u>Terms and
                                        Conditions</u></a>.</p>
                            @if($errors->first('accept_terms2'))<p
                                    class="form-control-static text-danger">{{ $errors->first('accept_terms2') }}</p>@endif

                            <div style="color: red;" class="hide">
                                <p>備註：中獎結果將即時以電郵通知。參加者若因聯絡電話及電子郵件填寫不正確，可能會導致無法正確接收中獎訊息。</p>
                                <p>Remarks: Winners will be notified by email instantly. Incorrect phone number and
                                    email given may result in the failure of notification.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <div class="btn-group center">
                                <button type="submit" class="btn btn-primary bt_submit">確定 ENTER</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>

@stop

@section('js')
    <script>

    </script>
@stop