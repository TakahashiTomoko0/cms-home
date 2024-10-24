@extends('layouts.origin2')

@section('content')
    <div class="flex justify-center">
        <form method="POST" action="{{ route('contact.confirm') }}" class="space-y-4 w-full max-w-lg">
            <h1 class="text-3xl font-bold underline text-center mb-6">
                お問い合わせフォーム
            </h1>

            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="flex items-center">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32">会社名</label>
                <input name="companyName" value="{{ old('companyName') }}" type="text" class="mt-1 block border-gray-300 rounded-md shadow-sm bg-gray-100 w-full h-[50px]" placeholder="例）株式会社○○" required>
            </div>
            @if ($errors->has('companyName'))
                <p class="text-red-500 text-xs mt-1 ml-50">{{ $errors->first('companyName') }}</p>
            @endif

            <div class="flex items-center">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32">氏名</label>
                <input name="userName" value="{{ old('userName') }}" type="text" class="mt-1 block border-gray-300 rounded-md shadow-sm bg-gray-100 w-full h-[50px]" placeholder="例）山田太郎" required>
            </div>
            @if ($errors->has('userName'))
                <p class="text-red-500 text-xs mt-1 ml-50">{{ $errors->first('userName') }}</p>
            @endif

            <div class="flex items-center">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32">電話番号</label>
                <input name="phoneNumber" value="{{ old('phoneNumber') }}" type="text" class="mt-1 block border-gray-300 rounded-md shadow-sm bg-gray-100 w-full h-[50px]" placeholder="例）000-0000-0000" required>
            </div>
            @if ($errors->has('phoneNumber'))
                <p class="text-red-500 text-xs mt-1 ml-50">{{ $errors->first('phoneNumber') }}</p>
            @endif

            <div class="flex items-center">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32">メールアドレス</label>
                <input name="email" value="{{ old('email') }}" type="email" class="mt-1 block border-gray-300 rounded-md shadow-sm bg-gray-200 w-full h-[50px]" placeholder="例）example@gmail.com" required>
            </div>
            @if ($errors->has('email'))
                <p class="text-red-500 text-xs mt-1 ml-50">{{ $errors->first('email') }}</p>
            @endif

            <div class="flex items-center">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32">生年月日</label>
                <input name="birthDate" value="{{ old('birthDate') }}" type="date" class="mt-1 block border-gray-300 rounded-md shadow-sm bg-gray-100 w-full h-[50px]" required>
            </div>
            @if ($errors->has('birthDate'))
                <p class="text-red-500 text-xs mt-1 ml-50">{{ $errors->first('birthDate') }}</p>
            @endif

            <div class="flex items-center">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32 flex-shrink-0">性別</label>
                <div class="flex items-center space-x-4 flex-grow">
                    <label><input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}> 男</label>
                    <label><input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}> 女</label>
                </div>
            </div>

            <div class="flex items-center">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32">職業</label>
                <select name="occupation" class="mt-1 block border-gray-300 rounded-md shadow-sm bg-gray-100 w-full h-[50px]" required>
                    <option value="" disabled selected>選択してください</option>
                    <option value="engineer" {{ old('occupation') == 'engineer' ? 'selected' : '' }}>エンジニア</option>
                    <!-- 他のオプションを追加 -->
                </select>
            </div>

            <div class="flex items-start">
                <span class="bg-emerald-500 text-white font-bold rounded px-2 py-1 w-16 text-center mr-2 flex-shrink-0">必須</span>
                <label class="block text-sm font-medium text-gray-700 w-32">お問い合わせ内容</label>
                <textarea name="body" rows="4" class="mt-1 block border-gray-300 rounded-md shadow-sm bg-gray-100 w-full h-[200px]" required>{{ old('body') }}</textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                    確認する
                </button>
            </div>
        </form>
    </div>
@endsection