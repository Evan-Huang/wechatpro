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
            if( !isset($inputs['accept_terms']) || $inputs['accept_terms'] != '1' ) {

                $validator = \Validator::make($inputs, [
                    'email' => 'required|email|unique:clients',
                    'phone' => 'required|numeric|min:60000000|max:69999999',
                    'accept_terms' => 'required'
                ], [
                    'email.required' => '請填寫Email',
                    'email.email' => '請檢查Email格式是否正確',
                    'email.unique' => '該Email已參與活動',
                    'phone.required' => '請填寫手機號碼',
                    'phone.numeric' => '必須為6字開頭的8位數字',
                    'phone.min' => '必須為6字開頭的8位數字',
                    'phone.max' => '必須為6字開頭的8位數字',
                    'accept_terms.required' => '請點選空格同意條款及細則以繼續',
                ]);

                if( $validator->fails() ) {
                    return \Redirect::back()->withInput($inputs)->withErrors($validator);
                }
            }else {
                $validator = \Validator::make($inputs, [
                    'email' => 'required|email|unique:clients',
                    'phone' => 'required|numeric|min:60000000|max:69999999'
                ], [
                    'email.required' => '請填寫Email',
                    'email.email' => '請檢查Email格式是否正確',
                    'email.unique' => '該Email已參與活動',
                    'phone.required' => '請填寫手機號碼',
                    'phone.numeric' => '必須為6字開頭的8位數字',
                    'phone.min' => '必須為6字開頭的8位數字',
                    'phone.max' => '必須為6字開頭的8位數字',
                ]);

                if( $validator->fails() ) {
                    return redirect()->back()->withInput($inputs)->withErrors($validator);
                }
            }

            //持久化數據到數據庫
            $clients = Client::create([
                'email' => $inputs['email'],
                'phone' => $inputs['phone']
            ]);



            if ($clients) {
                //數據保存成功則發送通知郵件
                $this->mail($inputs['email']);
                return redirect('/front')->with('success','成功參與本次活動');
            }else{
                return redirect()->back()->with('error','信息添加失敗，請重試');
            }

        }

        return view('frontend.index');
    }

    //郵件發送
    public function mail($email){

            // 第一个参数填写模板的路径，第二个参数填写传到模板的变量
            Mail::send('mail.mail',['email' => $email],function ($message) use($email) {

                // 发件人（你自己的邮箱和名称）
                $message->from(env('MAIL_USERNAME'), 'JaCa');
                // 收件人的邮箱地址
                $message->to($email);
                // 邮件主题
                $message->subject('测试');
            });


    }
}
