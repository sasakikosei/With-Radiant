@extends('layouts.app')

@section('content')
    <div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
        <h2>募集詳細</h2>
    </div>

@if ($user_id === $recruit_members->user_id)
  <div class="flex">
    <a href="{{ route('recruit.edit', $recruit_members->id) }}">
    <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ms-88">編集</button>
    </a>
    
    <form method="POST" action="{{ route('recruit.destroy', $recruit_members->id) }}">
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
          <td class="border px-4 py-2">ランク</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">募集目的</td>
          <td class="border px-4 py-2">{{$recruit_members->purpose}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">募集内容</td>
          <td class="border px-4 py-2">{{$recruit_members->content}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">投稿日時</td>
          <td class="border px-4 py-2">{{$recruit_members->created_at}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">更新日時</td>
          <td class="border px-4 py-2">{{$recruit_members->updated_at}}</td>
        </tr>
    　</tbody>
    </table>
    
    <a href="{{ route('recruit.index') }}">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mt-8 mr-2 mb-2 ms-88">戻る</button>
    </a>

@endsection