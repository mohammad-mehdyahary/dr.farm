@extends('frontend.main_master')
@section('content')
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
        <h2 style="display: flex;justify-content: center;">ویرایش پروفایل</h2>
        <br>

<form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
   @csrf
    <div class="rownew">
    <div class="col-25">
      <label class="label-newpass">نام کامل</label>
    </div>
    <div class="col-75">
      <input type="text"  class="input-newpass" name="name" value="{{ $user->name }}">
    </div>
  </div>
  <div class="rownew">
    <div class="col-25">
      <label class="label-newpass">ایمیل</label>
    </div>
    <div class="col-75">
      <input type="email" class="input-newpass" name="email" value="{{ $user->email }}">
    </div>
  </div>
  <div class="rownew">
    <div class="col-25">
      <label class="label-newpass">عکس پروفایل</label>
    </div>
    <div class="col-75">
      <input type="file" class="input-newpass" name="profile_photo_path">
    </div>
  </div>

  <div class="rownew">
    <input type="submit" class="submit-newpass" value="ویرایش">
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