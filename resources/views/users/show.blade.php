@extends('layouts.app')

@section('content')
    <div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
        <h2>ユーザ詳細</h2>
    </div>

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
    
    <a href="{{ route('users.index') }}">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ms-80">戻る</button>
    </a>

@endsection