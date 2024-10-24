<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactsSendmail;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index()
    {
        // 入力ページを表示
        return view('contact.index');
    }
    
    public function confirm(Request $request)
    {
        // バリデーションルールを定義
        $request->validate([
            'companyName' => 'required|max:255',
            'userName' => 'required|max:255',
            'phoneNumber' => 'required|regex:/^[0-9-]+$/|max:20',
            'email' => 'required|email',
            'birthDate' => 'required|date',
            'gender' => 'required|in:male,female',
            'occupation' => 'required',
            'body' => 'required',
        ]);
    
        // フォームからの入力値を全て取得
        $inputs = $request->all();
    
        // 確認ページに表示
        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        // バリデーション
        $request->validate([
            'companyName' => 'required|max:255',
            'userName' => 'required|max:255',
            'phoneNumber' => 'required|regex:/^[0-9-]+$/|max:20',
            'email' => 'required|email',
            'birthDate' => 'required|date',
            'gender' => 'required|in:male,female',
            'occupation' => 'required',
            'body' => 'required',
        ]);
    
        // actionの値を取得
        $action = $request->input('action');
    
        // action以外のinputの値を取得
        $inputs = $request->except('action');
    
        // actionの値で分岐
        if($action !== 'submit'){
            // 戻るボタンの場合リダイレクト処理
            return redirect()
                ->route('contact.index')
                ->withInput($inputs);
        } else {
            // 送信ボタンの場合、送信処理
    
            // ユーザにメールを送信
            Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));
            // 自分（管理者）にメールを送信
            Mail::to(config('mail.from.address'))->send(new ContactsSendmail($inputs));
    
            // 二重送信対策のためトークンを再発行
            $request->session()->regenerateToken();
    
            // セッションにデータを保存
            session(['inputs' => $inputs]);
    
            // thanksページにリダイレクト
            // return redirect()->route('contact.thanks');

            // thanksページに表示
            return view('contact.thanks', [
                'inputs' => $inputs,
            ]);
        }
    }
    
//     public function thanks()
//     {
//         // セッションからデータを取得
//         $inputs = session('inputs');
//         return view('contact.thanks', compact('inputs'));
//     }
}