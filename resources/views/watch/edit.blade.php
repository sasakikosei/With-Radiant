@extends('layouts.app')

@section('content')
    
<div class="container mx-auto w-[40rem]">
    <div class="text-center text-2xl font-bold text-center p-4 m-6 border border-gray-300 rounded-lg">
        <h2>watch party募集編集</h2>
    </div>
    
    <form method="POST" class="mb-5" action="{{ route('watch.update', $watch_members->id) }}">
        @method('put')
        @csrf
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900">対戦チーム</label>
            <input type="text" placeholder="例:チームA VS チームB" name="match_team" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900">試合開始時間</label>
            <input type="text" placeholder="試合開始時間を記入してください" name="time" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900">応援チーム</label>
            <input type="text" placeholder="例:チームA または 中立" name="root_team" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900">詳細</label>
            <input type="text" placeholder="詳細を記入してください" name="content" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
    <div class="form group pt-4">
    <a href="{{ route('watch.index') }}">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 mt-4">戻る</button>
    </a>
    <button type="submit" class="text-center mt-6 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg px-5 py-2.5">更新</button>
    </form>
</div>
@endsection