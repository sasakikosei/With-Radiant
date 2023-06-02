@if (Auth::check())
    {{-- watch partyへのリンク --}}
    <li><a class="link link-hover" href="#">watch party</a></li>
    {{-- 募集一覧へのリンク --}}
    <li><a class="link link-hover" href="#">募集一覧</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ユーザ一覧へのリンク --}}
    <li><a class="link link-hover" href="#">ユーザ一覧</a></li>
    {{-- マイページへのリンク --}}
    <li><a class="link link-hover" href="#">マイページ</a></li>
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a></li>
@else
    {{-- watch partyへのリンク --}}
    <li><a class="link link-hover" href="#">watch party</a></li>
    {{-- 募集一覧へのリンク --}}
    <li><a class="link link-hover" href="#">募集一覧</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ユーザ一覧へのリンク --}}
    <li><a class="link link-hover" href="#">ユーザ一覧</a></li>
    {{-- マイページへのリンク --}}
    <li><a class="link link-hover" href="#">マイページ</a></li>
    {{-- ユーザ登録ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('register') }}">新規登録</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('login') }}">ログイン</a></li>
@endif