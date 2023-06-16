@extends('layouts.app')

@section('content')
    
<div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
    <h2>募集詳細</h2>
</div>

@if ($user_id === $watch_members->user_id)
  <div class="flex">
    <a href="{{ route('watch.edit', $watch_members->id)}}">
    <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ms-88">編集</button>
    </a>
    <form method="POST" action="{{ route('watch.destroy', $watch_members->id) }}">
     @csrf
     @method('DELETE')
     <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ms-2">削除する</button>
     </form>
  </div>
@endif

<table class="table-auto flex justify-center">
      <tbody>
        <tr>
          <td class="border px-4 py-2">名前</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">対戦チーム</td>
          <td class="border px-4 py-2">{{$watch_members->match_team}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">試合開始時間</td>
          <td class="border px-4 py-2">{{$watch_members->time}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">応援チーム</td>
          <td class="border px-4 py-2">{{$watch_members->root_team}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">詳細</td>
          <td class="border px-4 py-2">{{$watch_members->content}}</td>
        </tr>
    　</tbody>
    </table>
    
  <a href="{{ route('watch.index') }}">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mt-8 mr-2 mb-2 ms-88">戻る</button>
  </a>

    

@endsection

