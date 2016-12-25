@extends('frontend.template.master')

@section('title','條款與細則')

@section('body')
    <style>


        .main_bg{
            padding-top:0;
            max-width: 750px;
            background-position:top center;
            background-image: url({{ asset('images/bg.jpg') }});
            background-size: cover;
        }

    </style>
    <div class="row" style="background-color: rgba(0,0,0,0.8);">
        <div class="col-sm-12">
            <div class="header-title text-center">
                <u><h5><b>澳門漁人碼頭與你相約於Countdown Fever 2017
                            <br>
                            See You at Macau Fisherman’s Wharf Countdown Fever 2017 </b></h5></u>
            </div>
        </div>


        <div class="col-sm-12" >
            <div class="tnc">
                <p>條款及細則： </p>
                <ol>
                    <li>參加者於有效活動期間填妥報名表可獲精美禮品電子換領券及參加《除夕倒數抽獎》。 </li>
                    <li>每人只可用一個有效電子郵箱及手提電話號碼報名一次。 </li>
                    <li>《相約於Countdown Fever 2017》活動參加時間如下：
                    <ul>
                        <li>線上報名換領精美禮品於2016年12月31日晚上9時截止； </li>
                        <li>《除夕倒數抽獎》於2016年12月30日下午3時截止參加。 </li>
                    </ul>
                    </li>
                    <li>憑精美禮品電子換領券，報名者可於2016年12月31日晚上7時30分至10時到澳門漁人碼頭換領。禮品數量有限，先到先得，送完即止。 </li>
                    <li>抽獎將於內部進行。得獎者將於2016年12月31日公佈，並會獲專人透過電話及電郵通知領獎。 </li>
                    <li>得獎者可於2016年12月31日晚上7時30分至10時到澳門漁人碼頭領獎。領獎時須出示身份證明文件及得獎電郵證明。如逾期未領獎即作放棄論。 </li>
                    <li>獎品不可退換及不可兌換現金。 </li>
                    <li>澳門勵駿創建有限公司及其關聯公司旗下之員工不得參加此抽獎，以示公允。 </li>
                    <li>澳門漁人碼頭保留隨時修改及解釋活動內容之權利，不作另行通知。如有任何爭議，澳門漁人碼頭保留最終決定權。 </li>
                    <li>澳門勵駿創建有限公司(「本公司」)會將參加者提供之個人資料只作為是次活動用途，參加者於報名表上提供之個人資料絕對保密。但本公司有機會將有關資料轉移或披露予管轄區域內的子公司，關聯公司、代理人、獨立承辦商及有業務聯繫人士作為推廣本公司之用途。公司亦可能基於以下情況透露個人資料：法律要求、法庭命令、政府或執法機構要求、誠懇地相信透露個人資料對保障公司或其他人士的權利或資產是必要或適當的。 </li>
                </ol>
                <p>Terms and Conditions:</p>
                <ol>
                    <li>During the promotion period, participant fills in the sign-up form to receive a free souvenir e-ticket and entre the &ldquo;Countdown Fever Lucky Draw&rdquo;.</li>
                    <li>Each person, with a valid email and phone number, is limited to fill in the form for one time only.</li>
                    <li>&ldquo;See You at Countdown Fever 2017&rdquo; sign-up deadline:</li>
                        <ul>
                            <li>Souvenir online sign-up deadline is by 9:00pm on 31st December, 2016.
                            <li>&ldquo;Countdown Fever Lucky Draw&rdquo; entry deadline is by 3:00pm on 30th December, 2016. </li>
                        </ul>
                    </li>
                    <li>Souvenirs can be claimed, with the e-ticket, at Macau Fisherman&rsquo;s Wharf from 7:30pm to 10:00pm on 31st December, 2016 on first-come-first-serve basis while stock lasts.</li>
                    <li>Lucky draw will be conducted internally. Winners will be announced and informed by phone and email on 31st December, 2016.</li>
                    <li>Prizes must be claimed with personal identification document support and proof of email notification at Macau Fisherman&rsquo;s Wharf from 7:30pm to 10:00pm on 31st December, 2016. Otherwise is considered as voluntarily forfeited.</li>
                    <li>Prize is non-refundable and cannot be exchanged for cash.</li>
                    <li>Employees of Macau Legend Development Ltd. and its affiliates are not eligible for this lucky draw.</li>
                    <li>Macau Fisherman&rsquo;s Wharf has the right to amend Terms and Conditions at any time without prior notice. Macau Fisherman&rsquo;s Wharf reserves the right of final decision in case of any dispute.</li>
                    <li>All personal data provided in the survey will be kept strictly confidential and used to communicate with you. But Macau Legend Development Ltd. may, where such disclosure is necessary to satisfy the purpose of direct marketing for which the data was collected, provide such information to its subsidiaries, affiliates, agents, independent contractors and business associates in other jurisdictions, or when required by law or court order, or as requested by any government or law enforcement authorities, or in good faith that disclosure is necessary or advisable to protect the rights or properties of Macau Legend Development Ltd. or other persons.</li>
                </ol>
            </div>
        </div>

    </div>

@stop

@section('js')
    <script>

    </script>
@stop