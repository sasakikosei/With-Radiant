<div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
      <h2>watch party一覧</h2>
</div>

<a href="{{ route('watch.create', Auth::user()->id) }}">
    <button style="margin-top:50px; margin-bottom:20px;" class="btn btn-primary" type="button">新規作成</button>
</a>