<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- favicon -->
    <link
    rel="shortcut icon"
    href="{{ asset('frontend/assets/img/logo-white.png') }}"
    type="image/x-icon"
    />
    <title>Dr.Farm</title>
    <!-- remix icon -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/index.css') }}" />
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  </head>
  <body>
    {{-- header --}}
    @include('frontend.body.header')
    {{-- endheader --}}
    {{-- main --}}
    @yield('content')
    {{-- end main --}}
    {{-- footer --}}
    @include('frontend.body.footer')
    {{-- end footer --}}

    <!-- scroll up -->
    <a href="#" class="scrollup" id="scroll-up">
      <!-- <i class="ri-arrow-up-fill scrollup__icon"></i> -->
      <i class="ri-arrow-up-s-line scrollup__icon"></i>
    </a>
    <!-- scroll revel -->
    {{-- <script src="{{ asset('frontend/assets/javascript/scrollreveal.min.js') }}"></script> --}}
    <!-- main js -->
    <script src="{{ asset('frontend/assets/javascript/index.js') }}"></script>
    <script src="{{ asset('frontend/assets/javascript/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</scr>
  </body>
</html>
