@extends('layouts.parent')

@section('content')
<main>
  <h1 class='title'>お問い合わせ</h1>
  <form action="/contact/comfirm"method='POST'>
    @csrf
    <table class="form__table">
      <tbody>
        <tr>
          <th clss='form__head'>
            <label for="last_name">お名前<span class='required-icon'>※</span></label>
          </th>
          <td>
            <input class='form__inp-text'type="text"name="last_name"id="last_name">
          </td>
          <td>
            <input class='form__inp-text'type="text"name='first_name'id="first_name">
          </td> 
          <input type="hidden"name='fullname'id="fullname">
        </tr>
        <tr>
          <th clss='form__head'><br></th>
          <td><span class='input_example'>例)山田</span></td>
          <td><span class='input_example'>例)太郎</span></td>
        </tr>
        @error('first_name')
        <tr>
          <th></th>
          <td class="error-message">※{{$message}}</td>
        </tr>
        @enderror
        @error('last_name')
        <tr>
          <th></th>
          <td class="error-message">※{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th clss='form__head'>
            <label for="gender">性別<span class='required-icon'>※</span></label>
          </th>
          <td>
            <input type="radio"class='gender-inp' name="gender" id="gender"value=1 checked>男性
          </td>
          <td>  
            <input type="radio" class='gender-inp'name="gender" id="gender"value=2>女性
          </td>
        </tr>
        @error('gender')
        <tr>
          <th></th>
          <td class="error-message">※{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th clss='form__head'>
            <label for="email">メールアドレス<span class='required-icon'>※</span></label>
          </th>
          <td colspan="2">
            <input class='form__inp-text'type="text"name='email'id='email'>
          </td>
        </tr>
        @error('email')
        <tr>
          <th></th>
          <td class="error-message">※{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th class='form__head'><br></th>
          <td><span class='input_example'>例)test@example.com</span></td>
        </tr>
        <tr>
          <th class='form__head'>
            <label for="postcode">郵便番号<span class='required-icon'>※</span></label>
          </th>
          <td colspan="2">
            <span class="postcode-icon">〒</span><input class='form__inp-text2'type="text"name='postcode'id='postcode'>
          </td>
        </tr>
        <tr>
          <th class='form__head'><br></th>
          <td colspan="2">
            <span class='input_example'>例)123-4567</span>
          </td>
        </tr>
        @error('postcode')
        <tr>
          <th></th>
          <td class="error-message">※{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th class='form__head'>
            <label for="address">住所<span class='required-icon'>※</span></label>
          </th>
          <td colspan="2">
            <input class='form__inp-text'type="text"name='address'id='address'>
          </td>
        </tr>
        <tr>
          <th clss='form__head'><bt></th>
          <td colspan="2">
            <span class='input_example'>例）東京都渋谷区千駄ヶ谷1-2-3</span>
          </td>
        </tr>
        @error('address')
        <tr>
          <th></th>
          <td class="error-message">※{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th clss='form__head'>
            <label for="building_name">建物名</label>
          </th>
          <td colspan="2">
            <input class='form__inp-text'type="text"name='building_name'id='building_name'>
          </td>
        </tr>
        <tr>
          <th class='form__head'><br></th>
          <td colspan="2">
            <span class='input_example'>例)千駄ヶ谷マンション101</span>
          </td>
        </tr>
        <tr>
          <th class='form__head'>
            <label for="opinion">ご意見<span class='required-icon'>※</span></label>
          </th>
          <td colspan="2">
            <textarea class='form__inp-text'name="opinion" id="opinion" cols="50" rows="10"></textarea>
          </td>
        </tr>
        @error('opinion')
        <tr>
          <th></th>
          <td class="error-message">※{{$message}}</td>
        </tr>
        @enderror
      </tbody>
    </table>
    <input class="form__btn"type="submit" value="確認"id='Button'>
  </form>
</main>
<script>
  document.getElementById("Button").onclick = function(){
    var lastname = document.getElementById("last_name");
    var firstname = document.getElementById("first_name");
    var fullname = document.getElementById("fullname");
    fullname.value = lastname.value + firstname.value;
  }
</script>
@endsection