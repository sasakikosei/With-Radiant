<div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
      <h2>ユーザ一覧</h2>
</div>    
    
  <form method="GET" class="mb-5" action="{{ route('users.index') }}">
    @csrf
    <div class="form group row">
      <label class="col-sm-2 col-form-label" for="name">ユーザー名</label>
      <div class="col-sm-8">
        <input placeholder="例：ハリー" class="form-control p-2 border border-gray-300 rounded-lg" type="text" name="name" value="{{ $name }}">
      </div>
      <label class="block mb-2 text-sm font-medium text-gray-900">性別</label>
        <div class="form-control w-1/3 mb-4">
            <select name="gender" class="select select-bordered">
                <option disabled selected>選択してください</option>
                <option @if($gender === '男性') selected @endif name="gender" value="男性">男性</option>
                <option @if($gender === '女性') selected @endif name="gender" value="女性">女性</option>
                <option @if($gender === 'その他') selected @endif name="gender" value="その他">その他</option>
            </select>
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900">ランク</label>
        <div class="form-control w-1/3 mb-4">
            <select name="rank" class="select select-bordered">
                <option disabled selected>選択してください</option>
                <option @if($rank === 'アイアン1') selected @endif name="rank" value="アイアン1">アイアン1</option>
                <option @if($rank === 'アイアン2') selected @endif name="rank" value="アイアン2">アイアン2</option>
                <option @if($rank === 'アイアン3') selected @endif name="rank" value="アイアン3">アイアン3</option>
                <option @if($rank === 'ブロンズ1') selected @endif name="rank" value="ブロンズ1">ブロンズ1</option>
                <option @if($rank === 'ブロンズ2') selected @endif name="rank" value="ブロンズ2">ブロンズ2</option>
                <option @if($rank === 'ブロンズ3') selected @endif name="rank" value="ブロンズ3">ブロンズ3</option>
                <option @if($rank === 'シルバー1') selected @endif name="rank" value="シルバー1">シルバー1</option>
                <option @if($rank === 'シルバー2') selected @endif name="rank" value="シルバー2">シルバー2</option>
                <option @if($rank === 'シルバー3') selected @endif name="rank" value="シルバー3">シルバー3</option>
                <option @if($rank === 'プラチナ1') selected @endif name="rank" value="プラチナ1">プラチナ</option>
                <option @if($rank === 'プラチナ2') selected @endif name="rank" value="プラチナ2">プラチナ</option>
                <option @if($rank === 'プラチナ3') selected @endif name="rank" value="プラチナ3">プラチナ</option>
                <option @if($rank === 'ダイヤ1') selected @endif name="rank" value="ダイヤ1">ダイヤ1</option>
                <option @if($rank === 'ダイヤ2') selected @endif name="rank" value="ダイヤ2">ダイヤ2</option>
                <option @if($rank === 'ダイヤ3') selected @endif name="rank" value="ダイヤ3">ダイヤ3</option>
                <option @if($rank === 'アセンダント1') selected @endif name="rank" value="アセンダント1">アセンダント1</option>
                <option @if($rank === 'アセンダント2') selected @endif name="rank" value="アセンダント2">アセンダント2</option>
                <option @if($rank === 'アセンダント3') selected @endif name="rank" value="アセンダント3">アセンダント3</option>
                <option @if($rank === 'イモータル1') selected @endif name="rank" value="イモータル1">イモータル1</option>
                <option @if($rank === 'イモータル2') selected @endif name="rank" value="イモータル2">イモータル2</option>
                <option @if($rank === 'イモータル3') selected @endif name="rank" value="イモータル3">イモータル3</option>
                <option @if($rank === 'レディアント') selected @endif name="rank" value="レディアント">レディアント</option>
            </select>
        </div>
      <div class="form group">
        <input type="submit" value="検索" class="btn btn-primary text-white bg-blue-400 hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" data-disable-with="検索">
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