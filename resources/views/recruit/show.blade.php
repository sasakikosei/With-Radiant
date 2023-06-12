@extends('layouts.app')

@section('content')
    <div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
        <h2>募集詳細</h2>
    </div>
    
    <table class="table-auto flex justify-center">
      <tbody>
        <tr>
          <td class="border px-4 py-2">名前</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">ランク</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">募集目的</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">募集内容</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">投稿日時</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">更新日時</td>
          <td class="border px-4 py-2"></td>
        </tr>
    　</tbody>
    </table>
    
    <a href="{{ route('recruit.recruit') }}">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800">戻る</button>
    </a>

@endsection