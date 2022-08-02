@extends('admin.admin_master')

@section('admin')
   <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      <section class="content">
        <div class="row">
            

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">لیست برند ها</h3>
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
                                <a href="" class="btn btn-info">ویرایش</a>
                                <a href="" class="btn btn-danger">حذف</a>
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
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
<!-- /.content-wrapper -->
@endsection