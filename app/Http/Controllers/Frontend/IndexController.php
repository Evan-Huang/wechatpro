<?php

namespace App\Http\Controllers\Frontend;

use App\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //首頁
    public function index(Request $request) {
        //判斷form提交
        if ($request->isMethod('post')) {

            //獲取request數據並驗證
            $inputs = $request->all();


            $validator = \Validator::make($inputs, [
                'clientname' => 'required',
                'email' => 'required|email|unique:clients',
                'phone' => 'required|numeric',
                'accept_terms1' => 'required|accepted',
                'accept_terms2' => 'required|accepted'
            ], [
                'clientname.required' => '請填寫姓名 Name',
                'email.required' => '請填寫電郵 Email',
                'email.email' => '請檢查Email格式是否正確',
                'email.unique' => '該Email已參與活動',
                'phone.required' => '請填寫手提電話 (區號+號碼)',
                'phone.numeric' => '必須為6字開頭的8位數字',
                'phone.min' => '必須為6字開頭的8位數字',
                'phone.max' => '必須為6字開頭的8位數字',
                'accept_terms1.required' => '請點選空格同意使用上述資料訂閱信息',
                'accept_terms1.accepted' => '請點選空格同意使用上述資料訂閱信息',
                'accept_terms2.required' => '請點選空格同意條款及細則以繼續',
                'accept_terms2.accepted' => '請點選空格同意條款及細則以繼續',
            ]);

            if( $validator->fails() ) {
                return \Redirect::back()->withInput($inputs)->withErrors($validator);
            }


            //持久化數據到數據庫
            $client = Client::create([
                'clientname' => $inputs['clientname'],
                'email' => $inputs['email'],
                'phone' => $inputs['phone']
            ]);



            if ($client) {
                //數據保存成功則發送通知郵件
                $this->mail($client);
                return redirect('/front/result')->with('success','成功參與本次活動');
            }else{
                return redirect()->back()->with('error','信息添加失敗，請重試');
            }

        }

        return view('frontend.index');
    }

    //條款與細則頁面
    public function terms() {
        return view('frontend.terms');
    }

    //即時結果頁面
    public function result() {
        return view('frontend.result');
    }

    //郵件發送
    public function mail($client){

        // 第一個參數填寫模板的路徑，第二個參數填寫傳到模板的變量
        Mail::send('mail.mail',['id' => $client->id],function ($message) use($client) {

            // 發件人（你自己的郵箱和名稱）
            $message->from(env('MAIL_USERNAME'), '澳門漁人碼頭與你相約於Countdown Fever 2017');
            // 收件人的郵箱地址
            $message->to($client->email);
            // 郵件主題
            $message->subject('澳門漁人碼頭與你相約於Countdown Fever 2017');
        });
    }

}
