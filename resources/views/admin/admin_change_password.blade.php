@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="container-full">

    <!-- Main content -->
   
  <section class="content">

    <!-- Basic Forms -->
     <div class="box" >
       <div class="box-header with-border">
         <h4 class="box-title">تغییر رمز عبور</h4>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form method="POST" action="{{ route('update.change.password') }}" >
                @csrf
                 <div class="row">
                   <div class="col-12" style="direction: rtl;">						
                      <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>رمز عبور فعلی <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" id="current_password" name="oldpassword" class="form-control" required="" ></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>رمز عبور جدید <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" id="password" name="password" class="form-control" required="" ></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> تکرار رمز عبور جدید <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="" ></div>
                            </div>
                        </div>
                      </div>
                      
                   <div class="text-xs-right">
                       <input  type="submit" value="تغییر رمز" class="btn btn-rounded btn-info">
                   </div>
               </form>

           </div>
           <!-- /.col -->
         </div>
         <!-- /.row -->
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->

   </section>
</div>
   <script type="text/javascript">
   $(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
   });
</script>
  @endsection