@extends('layouts.origin2')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">お問い合わせ内容の確認</h1>
    <form method="POST" action="{{ route('contact.send') }}" class="max-w-2xl mx-auto">
        @csrf

        <div class="space-y-6">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">メールアドレス</label>
                <p class="text-lg border-b border-gray-300 pb-1">{{ $inputs['email'] }}</p>
                <input name="email" value="{{ $inputs['email'] }}" type="hidden">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">会社名</label>
                <p class="text-lg border-b border-gray-300 pb-1">{{ $inputs['companyName'] }}</p>
                <input name="companyName" value="{{ $inputs['companyName'] }}" type="hidden">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">氏名</label>
                <p class="text-lg border-b border-gray-300 pb-1">{{ $inputs['userName'] }}</p>
                <input name="userName" value="{{ $inputs['userName'] }}" type="hidden">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">電話番号</label>
                <p class="text-lg border-b border-gray-300 pb-1">{{ $inputs['phoneNumber'] }}</p>
                <input name="phoneNumber" value="{{ $inputs['phoneNumber'] }}" type="hidden">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">生年月日</label>
                <p class="text-lg border-b border-gray-300 pb-1">{{ $inputs['birthDate'] }}</p>
                <input name="birthDate" value="{{ $inputs['birthDate'] }}" type="hidden">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">性別</label>
                <p class="text-lg border-b border-gray-300 pb-1">{{ $inputs['gender'] == 'male' ? '男性' : '女性' }}</p>
                <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">職業</label>
                <p class="text-lg border-b border-gray-300 pb-1">{{ $inputs['occupation'] }}</p>
                <input name="occupation" value="{{ $inputs['occupation'] }}" type="hidden">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">お問い合わせ内容</label>
                <p class="text-lg border-b border-gray-300 pb-1 whitespace-pre-wrap">{{ $inputs['body'] }}</p>
                <input name="body" value="{{ $inputs['body'] }}" type="hidden">
            </div>
        </div>

        <div class="flex justify-center space-x-4 mt-8">
            <button type="submit" name="action" value="back" class="px-6 py-2 bg-gray-500 text-white font-semibold rounded-lg shadow-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-75">
                入力内容修正
            </button>
            <button type="submit" name="action" value="submit" class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                送信する
            </button>
        </div>
    </form>
</div>
@endsection