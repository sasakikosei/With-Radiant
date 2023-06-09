<div class="prose mx-auto text-center p-4 mb-6 border border-gray-300 rounded-lg">
      <h2>募集一覧</h2>
</div>
    <form method="POST" class="mb-5" action="">
        @csrf
    <label class="block mb-2 text-sm font-medium text-gray-900">募集目的</label>
        <div class="form-control w-1/3 mb-4">
            <select name="purpose" class="select select-bordered">
                <option selected>選択してください</option>
                <option name="purpose" value="フレンド">フレンド</option>
                <option name="purpose" value="コンペ">コンペ</option>
                <option name="purpose" value="アンレ">アンレ</option>
                <option name="purpose" value="その他">その他</option>
            </select>
        </div>
        
    <div class="form group">
        <input type="submit" name="commit" value="検索" class="btn btn-primary text-white bg-blue-400 hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" data-disable-with="検索">
    </div>