@extends('frontend.main_master')
@section('content')
<div class="container">
    <div class="row">
     <div class="column left">
      <h2 style="display: flex;justify-content: center;">فراموشی رمز عبور</h2>
      <br> 

      <form method="POST" action="{{ route('password.email') }}">
        @csrf
      <div class="rownew">
          <div class="col-75">
             <input type="email" id="email" class="input-newpass" name="email" placeholder="ایمیل">
           </div>
       <div class="col-25">
         <label class="label-newpass">ایمیل</label>
       </div>
      </div>


       <div class="rownew">
        <input type="submit" class="submit-newpass" value="ارسال لینک">
      </div>
    </form>
  </div>
 </div>
</div>
@endsection