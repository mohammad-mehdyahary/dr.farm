@extends('frontend.main_master')
@section('content')
{{-- @php
    $user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp --}}
<div class="container">
    <div class="row">
      <div class="column right">
        <h3>نام کاربر:</h3>
        <div class="profile-img-name">
            <img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" style="height: 50px;width:50px;border-radius:50%;" alt="">
            <a href="{{ route('dashboard') }}"><h3>{{ Auth::user()->name }}</h3></a>

        </div>
        <br />
        <a style="color: var(--title-color);" href="{{ route('change.password') }}"
          ><h4 style="margin: 12px; cursor: pointer">تغییر رمز</h4></a
        >
        <hr />
        <a style="color: var(--title-color);" href="{{ route('user.profile') }}"
          ><h4 style="margin: 12px; cursor: pointer">ویرایش پروفایل</h4></a
        >
        <hr />
        <h4
          style="margin: 12px; cursor: pointer;color: var(--title-color);"
          onclick="document.getElementById('id01').style.display='block'"
        >
          وضعیت سفارش
        </h4>
        <hr />
        <a style="color: var(--title-color);" href="./successmon.html"
          ><h4 style="margin: 12px; cursor: pointer">عودت سفارش</h4></a
        >
        <hr />
        <a href="{{ route('user.logout') }}">
            <button class="button--flex button">
              <i class="ri-logout-box-r-line"></i>
              خروج از حساب
            </button>
        </a>
      </div>

      <div class="column left">
        <h2 style="display: flex;justify-content: center;">تغییر رمز عبور</h2>
        <br>

<form method="POST" action="{{ route('user.password.update') }}">
   @csrf
   <div class="rownew">
    <div class="col-25">
      <label for="password" class="label-newpass">رمز قبلی</label>
    </div>
    <div class="col-75">
      <input type="password" id="current_password" class="input-newpass" name="oldpassword" placeholder="رمز قبلی">
    </div>
  </div>
  <div class="rownew">
    <div class="col-25">
      <label for="password" class="label-newpass">رمز جدید</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" class="input-newpass" name="password" placeholder="رمز جدید">
    </div>
  </div>
  <div class="rownew">
    <div class="col-25">
      <label for="password" class="label-newpass"> تکرار رمز جدید</label>
    </div>
    <div class="col-75">
      <input type="password" id="password_confirmation" class="input-newpass" name="password_confirmation" placeholder=" تکرار رمز جدید">
    </div>
  </div>

  <div class="rownew">
    <input type="submit" class="submit-newpass" value="تغییر رمز">
  </div>
</form>
    </div>
    </div>
  </div>

  <div id="id01" class="modal">
    <form
      class="modal-content animate"
      action="/action_page.php"
      method="post"
    >
      <div class="imgcontainer">
        <span
          onclick="document.getElementById('id01').style.display='none'"
          class="close"
          title="Close Modal"
          >&times;</span
        >
        <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
      </div>

      <div class="containerss">
        <label for="uname"><b>کد وضعیت را وارد کنید</b></label>
        <input
          type="text"
          class="input-code"
          placeholder="کد وضعیت"
          required
        />

        <button type="submit" class="button">مشاهده درخواست</button>
      </div>

      <div class="containerss" style="background-color: #f1f1f1">
        <button
          type="button"
          onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn"
        >
          بستن
        </button>
        <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
      </div>
    </form>
  </div>
@endsection