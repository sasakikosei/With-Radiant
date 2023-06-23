@extends('layouts.app')

@section('content')
    
    <div class="prose mx-auto text-center p-4 m-6 border border-gray-300 rounded-lg">
        <h2>マイページ</h2>
    </div>
    
    <a href="{{ route('users.edit', Auth::user()->id) }}">
    <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-4 mt-6 ms-80">編集</button>
    </a>

    <table class="mx-auto w-[40rem]">
      <tbody>
        <tr>
          <td class="border px-4 py-2">名前</td>
          <td class="border px-4 py-2">{{$user->name}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">性別</td>
          <td class="border px-4 py-2">{{$user->gender}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">DIscordID</td>
          <td class="border px-4 py-2">{{$user->discord_id}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">ゲームID</td>
          <td class="border px-4 py-2">{{$user->game_id}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">ランク</td>
          <td class="border px-4 py-2">{{$user->rank}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">使用キャラ</td>
          <td class="border px-4 py-2">{{$user->character}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">使用武器</td>
          <td class="border px-4 py-2">{{$user->wepon}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">プレイ時間</td>
          <td class="border px-4 py-2">{{$user->play_time}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">プレイ人数</td>
          <td class="border px-4 py-2">{{$user->play_hc}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">VAROLANT歴</td>
          <td class="border px-4 py-2">{{$user->valo_time}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">プレイスタイル</td>
          <td class="border px-4 py-2">{{$user->play_style}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">好きなチーム</td>
          <td class="border px-4 py-2">{{$user->favorite_team}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">自己紹介</td>
          <td class="border px-4 py-2">{{$user->introduction}}</td>
        </tr>
      </tbody>
    </table>
  <div class="flex">
    <a href="/">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 mt-4 ms-80">戻る</button>
    </a>
    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
     @csrf
     @method('DELETE')
     <button type="submit" onclick="return confirm('Delete id = {{ $user->id }} ?')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ms-2 mt-4">ユーザ削除</button>
    </form>
  </div>
@endsection