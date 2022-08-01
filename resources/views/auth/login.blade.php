@extends('frontend.main_master')
@section('content')
<div class="containerc">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="POST" class="sign-in-form form-sigin" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
          <h2 class="title">ورود</h2>
          <div class="input-field">
            <i class="ri-mail-line"></i>
            <input type="email" id="email" name="email" placeholder="ایمیل" />
          </div>
          <div class="input-field">
            <i class="ri-lock-2-line"></i>
            <input type="password" id="password" name="password" placeholder="رمز عبور" />
          </div>
          <input type="submit" value="ورود" class="btn-signin solid" />
          <p class="social-text">یا وارد شوید با</p>
          <div class="social-media">
            <a href="#" class="social-icon"
              ><i class="ri-google-fill"></i
            ></a>
          </div>
          <a href="{{ route('password.request') }}" style="color: var(--text-color-light);"><p class="social-text">فراموشی رمز عبور</p></a>
        </form>
        <form method="POST" action="{{ route('register') }}" class="sign-up-form form-sigin">
            @csrf
          <h2 class="title">ثبت نام</h2>
          <div class="input-field">
            <i class="ri-user-3-line"></i>
            <input type="text" id="name" name="name" placeholder="نام کامل" />
          </div>
          <div class="input-field">
            <i class="ri-mail-line"></i>
            <input type="email" id="email" name="email" placeholder="ایمیل" />
          </div>
          <div class="input-field">
            <i class="ri-lock-2-line"></i>
            <input type="password" id="password" name="password" required autocomplete="new-password" placeholder="رمز عبور" />
          </div>
          <div class="input-field">
            <i class="ri-lock-2-line"></i>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="تکرار رمز عبور" />
          </div>
          
          <input type="submit" value="ثبت نام" class="btn-signin solid" />
          <p class="social-text">یا ثبت نام کنید با</p>
          <div class="social-media">
            <a href="#" class="social-icon"
              ><i class="ri-google-fill"></i
            ></a>
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>تازه واردها به اینجا بیان</h3>
          <p>
            اگر حساب کاربری ندارید با کیلک روی دکمه ثبت نام یک حساب کاربری ایجاد کنید
          </p>
          <button class="btn-signin transparent" id="sign-up-btn">
            ثبت نام
          </button>
        </div>
        <img
          src="{{ asset('frontend/assets/img/undraw_romantic_getaway_re_3f45.svg') }}"
          class="image"
          alt=""
        />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>یکی از ما ها هستید؟</h3>
          <p>
           اگر حساب کاربری دارید روی دکمه ورود بزنید و ایمیل و رمز خود را وارد کنید
          </p>
          <button class="btn-signin transparent" id="sign-in-btn">
            ورود
          </button>
        </div>
        <img
          src="{{ asset('frontend/assets/img/undraw_farm_girl_dnpe.svg') }}"
          class="image"
          alt=""
        />
      </div>
    </div>
  </div>
@endsection