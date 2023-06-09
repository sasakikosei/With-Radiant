

<div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
      <h2>ユーザ一覧</h2>
</div>    
    
  <form method="GET" class="mb-5" action="">
    @csrf
    <div class="form group row">
      <label class="col-sm-2 col-form-label" for="name">ユーザー名</label>
      <div class="col-sm-8">
        <input placeholder="例：ハリー" class="form-control p-2 border border-gray-300 rounded-lg" type="search" name="name">
      </div>
      <div class="form group row">
        <label class="col-sm-2 col-form-label" for="genser">性別</label>
        <div class="col-sm-8">
          <input type="radio" value="男性" name="gender">男性
          <input type="radio" value="女性" name="gender">女性
        </div>
      </div>
      <div class="form group">
        <input type="submit" name="commit" value="検索" class="btn btn-primary text-white bg-blue-400 hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" data-disable-with="検索">
      </div>
    </div>
    </form>
    
@if (isset($users))
    <ul class="list-none flex">
        @foreach ($users as $user)
            <li class="items-center gap-x-2 mb-4 inline-block px-3">
                <div class="block max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <a class="link link-hover text-info text-center mt-6 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg w-full px-3 py-1" href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                    </div>
                    <div class="pt-1"><h5>性別：{{$user->gender}}</h5></div>
                    <div><h5>ランク：{{$user->rank}}</h5></div>
                    
                </div>
            </li>
          
        @endforeach
    </ul>
    {{ $users->links('vendor.pagination.custom') }}
@endif
    