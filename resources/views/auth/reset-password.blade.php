@extends('frontend.main_master')
@section('content')
<div class="container">
    <div class="row">
     <div class="column left">
      <h2 style="display: flex;justify-content: center;">تغییر رمز عبور</h2>
      <br> 

      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="rownew">
            <div class="col-25">
              <label for="email"  class="label-newpass">ایمیل</label>
            </div>
            <div class="col-75">
              <input type="email" id="email" class="input-newpass" name="email" placeholder="ایمیل" :value="old('email', $request->email)">
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
              <label for="password_confirmation" class="label-newpass"> تکرار رمز جدید</label>
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
@endsection