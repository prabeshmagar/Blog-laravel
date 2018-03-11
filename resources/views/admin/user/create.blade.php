@extends('admin.layout.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @include('admin.layout.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messages')

            <form role="form" action="{{route('user.store')}}" method="post">
             {{csrf_field()}}
              <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                  <label for="name">User name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="{{old('name')}}">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{old('email')}}">
                  </div>

                  <div class="form-group">
                  <label for="phone">phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{old('phone')}}">
                  </div>

                  <div class="form-group">
                  <label for="password">password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password">
                  </div>

                  <div class="form-group">
                  <label for="confirm_password">confirm password</label>
                  <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="confirm password">
                  </div>

                  <div class="form-group">
                  <label for="status"> Status</label>
                  <div class="checkbox">
                  <label><input type="checkbox" name ="status" @if(old('status')==1)
                  checked
                  @endif value="1">Status</label>
                  </div>
                  </div>

                  

                  <div class="form-group ">
                  <label>Assign Role</label>

                  <div class="row">
                  @foreach ($roles as $role)

                  <div col-lg-4>
                  <div class="checkbox">
                  <label><input type="checkbox" name ="role[]" value=" {{$role->id}}">{{$role->name}}</label>
                  </div>
                  </div>

                  @endforeach
                
                  </div>
                 

              
                  <div class="form-group">
                 <button type="submit" class="btn btn-primary">Submit</button>
                    <a  href = "{{route('user.index')}}" class="btn btn-warning">Back</a>
                 </div>

                </div>
                  </div>
               
                
         
           
            </form>

                 
                  </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
    
      
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection