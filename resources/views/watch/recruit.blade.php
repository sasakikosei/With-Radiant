<div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
      <h2>watch party一覧</h2>
</div>
<div class="container mx-auto w-[40rem]">
 <a href="{{ route('watch.create', Auth::user()->id) }}">
     <button class="btn btn-primary mb-6" type="button">新規作成</button>
 </a>

@if (isset($watch_members))
    <ul class="list-none mb-6 w-[40rem]">
        @foreach ($watch_members as $watch_member)
            <li class="mb-4 w-[40rem]">
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <a class="link link-hover text-info text-center mt-6 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg w-full px-3 py-1" href="{{ route('watch.show', $watch_member->id) }}">{{ $watch_member->match_team }}</a>
                    </div>
                    <div class="pt-2"><h5>試合開始時間：{{$watch_member->time}}</h5></div>
                    <div class="pt-2"><h5>応援チーム：{{$watch_member->root_team}}</h5></div>
                    <div class="pt-1 text-lg"><h5>{{$watch_member->content}}</h5></div>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $watch_members->links('vendor.pagination.custom') }}
@endif
</div>