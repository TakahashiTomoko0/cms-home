<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactsSendmail extends Mailable
{
    use Queueable, SerializesModels;

    // // プロパティを定義
    // private $email;
    // // private $title;
    // private $body; 

    private $inputs;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct()
    public function __construct($inputs)
    {
        // コンストラクタでプロパティに値を格納
        // $this->email = $inputs['email'];
        // // $this->title = $inputs['title'];
        // $this->body = $inputs['body'];

        $this->inputs = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
    
        // メールの設定
        return $this
        // ->from('example@gmail.com')
        // ->subject('自動送信メール')
        // ->view('contact.mail')
        // ->with([
        // 'email' => $this->email,
        // // 'title' => $this->title,
        // 'body' => $this->body,
        // ]);    
        ->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('お問い合わせを受け付けました')
        ->view('contact.mail')
        ->with([
            'inputs' => $this->inputs,
        ]);
    }
}
