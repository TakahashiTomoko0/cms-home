@extends('layouts.origin2')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h1 class="text-xl font-bold text-green-700 mb-4">送信完了しました</h1>
        
        <div class="space-y-4">
            <div>
                <strong>会社名:</strong> {{ $inputs['companyName'] }}
            </div>
            <div>
                <strong>氏名:</strong> {{ $inputs['userName'] }}
            </div>
            <div>
                <strong>電話番号:</strong> {{ $inputs['phoneNumber'] }}
            </div>
            <div>
                <strong>メールアドレス:</strong> {{ $inputs['email'] }}
            </div>
            <div>
                <strong>生年月日:</strong> {{ $inputs['birthDate'] }}
            </div>
            <div>
                <strong>性別:</strong> {{ $inputs['gender'] == 'male' ? '男' : '女' }}
            </div>
            <div>
                <strong>職業:</strong> {{ $inputs['occupation'] }}
            </div>
            <div>
                <strong>お問い合わせ内容:</strong><br>{{ nl2br(e($inputs['body'])) }}
            </div>
        </div>

        <a href="{{ route('contact.index') }}" class="mt-6 inline-block bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
            戻る
        </a>
    </div>
</div>
@endsection