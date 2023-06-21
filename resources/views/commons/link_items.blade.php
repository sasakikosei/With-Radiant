@if (Auth::check())
    {{-- watch partyへのリンク --}}
    <li><a class="link link-hover" href="{{ route('watch.index') }}">watch party</a></li>
    {{-- 募集一覧へのリンク --}}
    <li><a class="link link-hover" href="{{ route('recruit.index') }}">募集一覧</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ユーザ一覧へのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.index') }}">ユーザ一覧</a></li>
    {{-- マイページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.mypage', Auth::user()->id) }}">マイページ</a></li>
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a></li>
@else
    {{-- ユーザ一覧へのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.index') }}">ユーザ一覧</a></li>
    {{-- ユーザ登録ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('register') }}">新規登録</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('login') }}">ログイン</a></li>
@endif