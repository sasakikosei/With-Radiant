@extends('layouts.app')

@section('content')

<div class="container mx-auto w-[50rem]">
    <div class="text-center text-2xl font-bold p-4 mb-6 border border-gray-300 rounded-lg mb-12">
        <h2>新規登録して共にプレイするフレンドを見つけよう</h2>
    </div>
    <div class="flex justify-center mt-12 mb-12">
    <a class="link link-hover" href="{{ route('register') }}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">新規登録</button></a>
    <a class="link link-hover" href="{{ route('login') }}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">ログイン</button></a>
    </div>
    <div class="text-center text-2xl font-bold p-4 mb-6 border border-gray-300 rounded-lg mt-12">
        <h2>With Radiantで出来ること</h2>
    </div>
   
    <ul class="list-none mb-6 text-lg font-bold mx-auto mt-8">
        <li class="mb-4">①プロフィールを詳細に書くことで自分に合ったユーザーと繋がることができる</li>
        <li class="mb-4">②募集を投稿することで目的に合ったユーザーを募ることができる</li>
        <li class="mb-8">③一緒に大会を観戦するユーザーを募ることができる</li>
    </ul>
</div>    

    
    
    
    

@endsection