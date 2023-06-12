@extends('layouts.app')

@section('content')
    <div class="prose mx-auto text-center p-4 m-6 border border-gray-300 rounded-lg">
        <h2>watch party募集</h2>
    </div>
    
    <form method="POST" class="mb-5" action="{{ route('watch.store', Auth::user()->id,) }}">
        @csrf
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">対戦チーム</label>
            <input type="text" placeholder="例:チームA VS チームB" name="content" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">試合開始時間</label>
            <input type="text" placeholder="試合開始時間を記入してください" name="content" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">応援チーム</label>
            <input type="text" placeholder="例:チームA または 中立" name="content" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">詳細</label>
            <input type="text" placeholder="詳細を記入してください" name="content" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
    <div class="form group pt-4">
    <a href="{{ route('watch.index') }}">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800">戻る</button>
    </a>
        <input type="submit" value="投稿する" class="btn btn-primary text-white bg-blue-400 hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" data-disable-with="投稿する">
    </div>
    </form>
    

@endsection