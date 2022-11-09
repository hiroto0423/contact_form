@extends('layouts.parent')

@section('content')
<main>
  <h1 class='title'>管理システム</h1>
  <form action="/management/serach"method="get"id='form'class="search__form">
    <ul>
      <li class="search__form-li">
        <label for="name"class="search__form-label">お名前</label>
        <input type="text"id='name'name='fullname'class="search__inp-text">
        <label for="gender"class="search__form-label">性別</label>
        <input type="radio" name="gender" id="gender"value=''checked class="gender-inp"><span class="gender-inp-text">全て</span>
        <input type="radio" name="gender" id="gender"value=1 class="gender-inp"><span class="gender-inp-text">男性</span>
        <input type="radio" name="gender" id="gender"value=2 class="gender-inp"><span class="gender-inp-text">女性</span>
      </li>
      <li class="search__form-li">
        <label for="created_at"class="search__form-label">登録日</label>
        <input type="date"id='created_at'name='start_date'class="search__inp-text">
        <span>~</span>
        <input type="date"name='end_date'class="search__inp-text">
      </li>
      <li class="search__form-li">
        <label for="email"class="search__form-label">メールアドレス</label>
        <input type="text"id="email"name="email"class="search__inp-text">
      </li>
    </ul>
    <input type="submit"value="検索" class="form__btn">
    <a href="/management"class="reset-link">リセット</a>
  </form>
  <div class='data_container'>
    <div class="flex-item">
      @if (count($datas) >0)
        <p>全{{ $datas->total() }}件中 
            {{  ($datas->currentPage() -1) * $datas->perPage() + 1}} ~ 
            {{ (($datas->currentPage() -1) * $datas->perPage() + 1) + (count($datas) -1)  }}件</p>
      @else
      <p>データがありません。</p>
      @endif 
      {{ $datas->appends($form)->links() }}
    </div>
    <table class="data-table">
      <tbody>
        <tr>
          <th class="data-id">ID</th>
          <th class="data-name">お名前</th>
          <th class="data-gender">性別</th>
          <th class="data-email">メールアドレス</th>
          <th class="data-opinion">ご意見</th>
          <th></th>
        </tr>
        @foreach($datas as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->fullname}}</td>
          <td>
            @if($data->gender == 1)
              男性
            @elseif($data->gender == 2) 
              女性
            @endif
          </td>
          <td>{{$data->email}}</td>
          <td class="opi-td">
            <p class="opi-text">{{Str::limit($data->opinion,50,'...')}}</p>
            <p class="opi-text2" style="display:none;">{{$data->opinion}}</p>
          </td>
          <td>
            <form action="{{route('delete',['id' => $data->id])}}"method='post'>
              @csrf
              <button class="delete-button">消去</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script>
    const hover_item = document.getElementsByClassName('opi-td');
    const change_item = document.getElementsByClassName('opi-text');
    const change_item2 = document.getElementsByClassName('opi-text2')
    // ボタンにhoverした時
    for(let i=0;i<hover_item.length;i++){
      hover_item[i].addEventListener('mouseover', () => {
        change_item[i].style.display = 'none';
        change_item2[i].style.display = 'block';
      }, false);
      // ボタンから離れた時
      hover_item[i].addEventListener('mouseleave', () => {
        change_item[i].style.display = 'block';
        change_item2[i].style.display = 'none';
      }, false);
    }
  </script>
</main>
@endsection