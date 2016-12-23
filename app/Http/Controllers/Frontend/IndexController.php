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
                'phone' => 'required|numeric|min:60000000|max:69999999',
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

    //条款与细则页面
    public function terms() {
        return view('frontend.terms');
    }

    //即时结果页面
    public function result() {
        return view('frontend.result');
    }

    //郵件發送
    public function mail($client){

            // 第一个参数填写模板的路径，第二个参数填写传到模板的变量
            Mail::send('mail.mail',['id' => $client->id],function ($message) use($client) {

                // 发件人（你自己的邮箱和名称）
                $message->from(env('MAIL_USERNAME'), '渔人码头');
                // 收件人的邮箱地址
                $message->to($client->email);
                // 邮件主题
                $message->subject('测试');
            });
    }

}
