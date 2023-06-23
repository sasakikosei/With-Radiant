@extends('layouts.app')

@section('content')
<div class="container mx-auto w-[40rem]">
    <div class="prose mx-auto text-center p-4 m-6 border border-gray-300 rounded-lg">
        <h2>募集投稿</h2>
    </div>
    
    <form method="POST" class="mb-5" action="{{ route('recruit.store', Auth::user()->id,) }}">
        @csrf
    <label class="block mb-2 text-sm font-medium text-gray-900">募集目的</label>
        <div class="form-control mb-4">
            <select name="purpose" class="select select-bordered">
                <option disabled selected>必須　選択してください</option>
                <option name="purpose" value="フレンド">フレンド</option>
                <option name="purpose" value="コンペ">コンペ</option>
                <option name="purpose" value="アンレ">アンレ</option>
                <option name="purpose" value="その他">その他</option>
            </select>
        </div>
    <label class="block mb-2 text-sm font-medium text-gray-900">ランク</label>
        <div class="form-control mb-4">
            <select name="rank" class="select select-bordered">
                <option disabled selected>自分のランクを選択してください</option>
                <option name="rank" value="アイアン1">アイアン1</option>
                <option name="rank" value="アイアン2">アイアン2</option>
                <option name="rank" value="アイアン3">アイアン3</option>
                <option name="rank" value="ブロンズ1">ブロンズ1</option>
                <option name="rank" value="ブロンズ2">ブロンズ2</option>
                <option name="rank" value="ブロンズ3">ブロンズ3</option>
                <option name="rank" value="シルバー1">シルバー1</option>
                <option name="rank" value="シルバー2">シルバー2</option>
                <option name="rank" value="シルバー3">シルバー3</option>
                <option name="rank" value="プラチナ1">プラチナ</option>
                <option name="rank" value="プラチナ2">プラチナ</option>
                <option name="rank" value="プラチナ3">プラチナ</option>
                <option name="rank" value="ダイヤ1">ダイヤ1</option>
                <option name="rank" value="ダイヤ2">ダイヤ2</option>
                <option name="rank" value="ダイヤ3">ダイヤ3</option>
                <option name="rank" value="アセンダント1">アセンダント1</option>
                <option name="rank" value="アセンダント2">アセンダント2</option>
                <option name="rank" value="アセンダント3">アセンダント3</option>
                <option name="rank" value="イモータル1">イモータル1</option>
                <option name="rank" value="イモータル2">イモータル2</option>
                <option name="rank" value="イモータル3">イモータル3</option>
                <option name="rank" value="レディアント">レディアント</option>
            </select>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">募集内容</label>
            <input type="text" placeholder="募集内容の内容を記入してください" name="content" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
        </div>
    <div class="form group pt-4">
    <a href="{{ route('recruit.index') }}">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800">戻る</button>
    </a>
        <input type="submit" value="投稿する" class="btn btn-primary text-white bg-blue-400 hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" data-disable-with="投稿する">
    </div>
    </form>
</div>
@endsection
