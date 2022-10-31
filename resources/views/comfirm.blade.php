@extends('layouts.parent')

@section('content')
<main>
  <h1 class='title'>内容確認</h1>
  <table class="comfirm__table">
    <tbody>
      <tr>
        <th>お名前</th>
        <td>{{$contact['last_name']}} {{$contact['first_name']}}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          @if($contact['gender']=1) 
            男性
          @elseif($contact['gender']=2) 
            女性
          @endif
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{$contact['email']}}</td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>{{$contact['postcode']}}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{$contact['address']}}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{$contact['building_name']}}</td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>{{$contact['opinion']}}</td>
      </tr>
    </tbody>
  </table>

  <form action="/contact/create"method='POST'>
    @csrf
    <input type="hidden"value={{$contact['last_name']}}{{$contact['first_name']}} name='fullname'>
    <input type="hidden"value={{$contact['gender']}} name='gender'>
    <input type="hidden"value={{$contact['email']}} name='email'>
    <input type="hidden"value={{$contact['postcode']}} name='postcode'>
    <input type="hidden"value={{$contact['address']}} name='address'>
    <input type="hidden"value={{$contact['building_name']}} name='building_name'>
    <input type="hidden"value={{$contact['opinion']}} name='opinion'>
    <input class="form__btn"type="submit">
  </form>
  <a href="javascript:history.back()"class="fix-btn">修正する</a>
</main>
