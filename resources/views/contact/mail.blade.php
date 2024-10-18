<!-- @extends('layouts.origin2')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
  @csrf

  <label>メールアドレス</label>
  {{ $inputs['email'] }}
  <input name="email" value="{{ $inputs['email'] }}" type="hidden">




  <label>お問い合わせ内容</label>
  {!! nl2br(e($inputs['body'])) !!}
  <input name="body" value="{{ $inputs['body'] }}" type="hidden">

  <button type="submit" name="action" value="back">入力内容修正</button>
  <button type="submit" name="action" value="submit">送信する</button>
</form>
@endsection -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせを受け付けました</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        h1 { color: #333; }
        p { font-size: 16px; line-height: 1.5; }
    </style>
</head>
<body>
    <div class="container">
        <h1>お問い合わせを受け付けました</h1>
        <p>以下の内容でお問い合わせを受け付けました。</p>
        <p><strong>会社名:</strong> {{ $inputs['companyName'] }}</p>
        <p><strong>氏名:</strong> {{ $inputs['userName'] }}</p>
        <p><strong>電話番号:</strong> {{ $inputs['phoneNumber'] }}</p>
        <p><strong>メールアドレス:</strong> {{ $inputs['email'] }}</p>
        <p><strong>生年月日:</strong> {{ $inputs['birthDate'] }}</p>
        <p><strong>性別:</strong> {{ $inputs['gender'] == 'male' ? '男性' : '女性' }}</p>
        <p><strong>職業:</strong> {{ $inputs['occupation'] }}</p>
        <p><strong>お問い合わせ内容:</strong></p>
        <p>{{ $inputs['body'] }}</p>
        <p>ご返答までしばらくお待ちください。</p>
        <p>ありがとうございました。</p>
    </div>
</body>
</html>