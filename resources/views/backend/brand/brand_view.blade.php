@extends('admin.admin_master')

@section('admin')
   <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      <section class="content">
        <div class="row">
            

          <div class="col-8">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">لیست برند</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>نام برند انگلیسی</th>
                              <th>نام برند فارسی</th>
                              <th>عکس</th>
                              <th>وضعیت</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($fruits as $item)
                            
                        <tr>
                            <td>{{ $item->fruit_name_en }}</td>
                            <td>{{ $item->fruit_name_fa }}</td>
                            <td><img src="{{ asset($item->fruit_image) }}" style="width:70px;height:40px;"></td>
                            <td>
                                <a href="" class="btn btn-info mb-5">ویرایش</a>
                                <a href="" class="btn btn-danger mb-5">حذف</a>
                            </td>
                            
                        </tr>
                        @endforeach
                         
                      </tbody>
                      
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->          
          </div>
          <!-- /.col -->

          <div class="col-4">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">افزودن برند</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                     
                    <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data" style="direction: rtl;">
                        @csrf
                         					
                             
                                    <div class="form-group">
                                        <h5>نام برند (انگلیسی)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text"  name="fruit_name_en" class="form-control"  >
                                          @error('fruit_name_en')
                                              <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <h5>نام برند (فارسی)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text"  name="fruit_name_fa" class="form-control"  >
                                            @error('fruit_name_fa')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                      </div>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <h5>عکس برند <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="fruit_image"  class="form-control"  >
                                            @error('fruit_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                
                              
                              
                           <div class="text-xs-right">
                               <input  type="submit" value="افزودن" class="btn btn-rounded btn-info">
                           </div>
                       </form> 
                   </div>
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->          
           </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
<!-- /.content-wrapper -->
@endsection