@extends('layouts.app')

@section('content')
    
    <div class="prose mx-auto text-center">
        <h2>マイページ</h2>
    </div>
    
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">編集</button>
    
    <table class="table-auto flex justify-center">
      <tbody>
        <tr>
          <td class="border px-4 py-2">名前</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2">DIscordID</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">ゲームID</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">ランク</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">使用キャラ</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">使用武器</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">プレイ時間</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">プレイ人数</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">VAROLANT歴</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">プレイスタイル</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">好きなチーム</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">自己紹介</td>
          <td class="border px-4 py-2"></td>
        </tr>
      </tbody>
    </table>
    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">戻る</button>

@endsection