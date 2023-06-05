@extends('layouts.app')

@section('content')

    <div class="prose mx-auto text-center">
        <h2>ログイン</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('login') }}" class="w-1/2">
            @csrf

            <div class="form-control my-4">
                <label for="email" class="label">
                    <span class="label-text">メールアドレス</span>
                </label>
                <input type="email" name="email" class="input input-bordered w-full">
            </div>

            <div class="form-control my-4">
                <label for="password" class="label">
                    <span class="label-text">パスワード</span>
                </label>
                <input type="password" name="password" class="input input-bordered w-full">
            </div>
            
            <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('ログインを記憶する') }}</span>
            </label>
            </div>

            <button type="submit" class="btn btn-primary btn-block normal-case">ログイン</button>

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2 text-center">アカウントをお持ちではないですか？ <a class="link link-hover text-info" href="{{ route('register') }}">新規登録</a></p>
        </form>
    </div>
@endsection