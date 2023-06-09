@extends('layouts.app')

@section('content')
    <div class="prose mx-auto text-center p-4 m-6 border border-gray-300 rounded-lg">
        <h2>プロフィール編集</h2>
    </div>
    
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">名前</label>
            <input type="text" placeholder="名前を記入してください" name="name" value="{{ $user->name }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">性別</label>
        <div class="flex gap-2 mb-4">
            <div class="form-control items-center">
                <label for="m" class="label cursor-pointer">
                    <input type="radio" name="gender" value="男性" class="radio" @if($user->gender === '男性') checked @endif>
                    男性
                </label>
            </div>
            <div class="form-control items-center">
                <label for="f" class="label cursor-pointer">
                    <input type="radio" name="gender" value="女性" class="radio" @if($user->gender === '女性') checked @endif>
                    女性
                </label>
            </div>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">DIscordID</label> 
            <input type="text" placeholder="ご使用中のDIscordIDを記入してください" name="discord_id" value="{{ $user->discord_id }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">ゲームID</label>
            <input type="text" placeholder="ご使用中のゲームIDを記入してください" name="game_id" value="{{ $user->game_id }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900">ランク</label>
        <div class="form-control w-1/3 mb-4">
            <select name="rank" class="select select-bordered">
                <option disabled selected>選択してください</option>
                <option @if($user->rank === 'アイアン1') selected @endif name="rank" value="アイアン1">アイアン1</option>
                <option @if($user->rank === 'アイアン2') selected @endif name="rank" value="アイアン2">アイアン2</option>
                <option @if($user->rank === 'アイアン3') selected @endif name="rank" value="アイアン3">アイアン3</option>
                <option @if($user->rank === 'ブロンズ1') selected @endif name="rank" value="ブロンズ1">ブロンズ1</option>
                <option @if($user->rank === 'ブロンズ2') selected @endif name="rank" value="ブロンズ2">ブロンズ2</option>
                <option @if($user->rank === 'ブロンズ3') selected @endif name="rank" value="ブロンズ3">ブロンズ3</option>
                <option @if($user->rank === 'シルバー1') selected @endif name="rank" value="シルバー1">シルバー1</option>
                <option @if($user->rank === 'シルバー2') selected @endif name="rank" value="シルバー2">シルバー2</option>
                <option @if($user->rank === 'シルバー3') selected @endif name="rank" value="シルバー3">シルバー3</option>
                <option @if($user->rank === 'プラチナ1') selected @endif name="rank" value="プラチナ1">プラチナ</option>
                <option @if($user->rank === 'プラチナ2') selected @endif name="rank" value="プラチナ2">プラチナ</option>
                <option @if($user->rank === 'プラチナ3') selected @endif name="rank" value="プラチナ3">プラチナ</option>
                <option @if($user->rank === 'ダイヤ1') selected @endif name="rank" value="ダイヤ1">ダイヤ1</option>
                <option @if($user->rank === 'ダイヤ2') selected @endif name="rank" value="ダイヤ2">ダイヤ2</option>
                <option @if($user->rank === 'ダイヤ3') selected @endif name="rank" value="ダイヤ3">ダイヤ3</option>
                <option @if($user->rank === 'アセンダント1') selected @endif name="rank" value="アセンダント1">アセンダント1</option>
                <option @if($user->rank === 'アセンダント2') selected @endif name="rank" value="アセンダント2">アセンダント2</option>
                <option @if($user->rank === 'アセンダント3') selected @endif name="rank" value="アセンダント3">アセンダント3</option>
                <option @if($user->rank === 'イモータル1') selected @endif name="rank" value="イモータル1">イモータル1</option>
                <option @if($user->rank === 'イモータル2') selected @endif name="rank" value="イモータル2">イモータル2</option>
                <option @if($user->rank === 'イモータル3') selected @endif name="rank" value="イモータル3">イモータル3</option>
                <option @if($user->rank === 'レディアント') selected @endif name="rank" value="レディアント">レディアント</option>
            </select>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">使用キャラ</label>
            <input type="text" placeholder="よく使用するキャラを記入してください" name="character" value="{{ $user->character }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">使用武器</label>
            <input type="text" placeholder="よく使用する武器を記入してください" name="wepon" value="{{ $user->wepon }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">プレイ時間</label>
            <input type="text" placeholder="よく遊ぶ時間帯を記入してください" name="play_time" value="{{ $user->play_time }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900">プレイ人数</label>
        <div class="form-control w-1/3 mb-4">
            <select name="play_hc" class="select select-bordered">
                <option disabled selected>選択してください</option>
                <option @if($user->play_hc === 'ソロ') selected @endif name="play_hc" value="ソロ">ソロ</option>
                <option @if($user->play_hc === 'デュオ') selected @endif name="play_hc" value="デュオ">デュオ</option>
                <option @if($user->play_hc === 'トリオ') selected @endif name="play_hc" value="トリオ">トリオ</option>
                <option @if($user->play_hc === 'フルパ') selected @endif name="play_hc" value="フルパ">フルパ</option>
                <option @if($user->play_hc === 'その他') selected @endif name="play_hc" value="その他">その他</option>
            </select>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">VAROLANT歴</label>
            <input type="text" placeholder="VAROLANT歴を記入してください" name="valo_time" value="{{ $user->valo_time }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900">プレイスタイル</label>
        <div class="form-control w-1/3 mb-4">
            <select name="play_style" class="select select-bordered">
                <option disabled selected>選択してください</option>
                <option @if($user->play_style === 'ランク上げガチ勢') selected @endif value="ランク上げガチ勢">ランク上げガチ勢</option>
                <option @if($user->play_style === '楽しく真剣に') selected @endif value="楽しく真剣に">楽しく真剣に</option>
                <option @if($user->play_style === '楽しくゆるく') selected @endif value="楽しくゆるく">楽しくゆるく</option>
                <option @if($user->play_style === 'その他') selected @endif value="その他">その他</option>
            </select>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">好きなチーム</label>
            <input type="text" placeholder="好きなチームを記入してください" name="favorite_team" value="{{ $user->favorite_team }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">自己紹介</label>
            <input type="text" placeholder="自己紹介を記入してください" name="introduction" value="{{ $user->introduction }}"id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" class="text-center mt-6 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg w-full px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">プロフィール更新</button>
        
    </form>
   
@endsection
