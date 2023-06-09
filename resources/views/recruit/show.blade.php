@extends('layouts.app')

@section('content')
<div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
    <h2>募集詳細</h2>
</div>
<div class="container mx-auto w-[40rem]">
@if ($user_id === $recruit_members->user_id)
  <div class="flex">
    <a href="{{ route('recruit.edit', $recruit_members->id) }}">
    <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">編集</button>
    </a>
    <form method="POST" action="{{ route('recruit.destroy', $recruit_members->id) }}">
     @csrf
     @method('DELETE')
     <button type="submit" onclick="return confirm('Delete id = {{ $recruit_members->id }} ?')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ms-2">削除</button>
    </form>
  </div>
@endif

    <table class="mx-auto w-[40rem]">
      <tbody>
        <tr>
          <td class="border px-4 py-2">名前</td>
          <td class="border px-4 py-2">{{$recruit_members->user->name}}</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">ランク</td>
          <td class="border px-4 py-2">{{$recruit_members->rank}}</td>
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
    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mt-8 mr-2 mb-8">戻る</button>
    </a>
    <h2 class="text-2xl">コメント</h2>
    <div class="mt-4">
        <ul class="list-none">
            @foreach ($recruit_members->comments as $comment)
            <li class="flex items-start gap-x-2 mb-4">
                        <div class="flex">
                            <a class="link link-hover text-info me-8" href="{{ route('users.show', $comment->user->id) }}">{{ $comment->user->name }}</a>
                            <p class="mb-2 me-8">{{ ($comment->comment) }}</p>
                        </div>
                            @if (Auth::id() == $comment->user_id)
                                <form method="POST" action="{{ route('comment.destroy', $comment->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-2 py-2 me-4" 
                                        onclick="return confirm('Delete id = {{ $comment->id }} ?')">削除</button>
                                </form>
                            @endif
                        <div>
                            <span class="text-muted text-gray-500  ms-4">{{ $comment->created_at }}</span>
                        </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="mt-4">
        <form method="POST" action="{{ route('rcomment.store', $recruit_members->id) }}">
            @csrf
            <input value="{{ $recruit_members->id }}" type="hidden" name="recruit_id"/>
            <div class="form-control mt-4">
                <textarea rows="2" name="comment" placeholder="コメントする" class="input input-bordered w-full mb-4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block normal-case">投稿する</button>
        </form>
    </div>
</div>
@endsection