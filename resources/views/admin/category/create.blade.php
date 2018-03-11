@extends('admin.layout.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
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
              <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messages')

            <form role="form" action="{{route('category.store')}}" method="post">
             {{csrf_field()}}
              <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                  <label for="category"> category</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="category title">
                </div>

               <div class="form-group">
                  <label for="exampleInputEmail1">Tag Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                  </div>

                      <!--Permission Table -->
                  <div class="row">
                   <div class="col-lg-4">
                  <label for="">Posts Permissions</label>
                  @foreach($permissions as $permission)

                  @if($permission->for == 'post')
                  <div class="checkbox">
                  <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                   </div>
                  @endif

                  @endforeach
                  
                    </div>

                    <div class="col-lg-4">
                    <label for="">User Permissions</label>
                    @foreach($permissions as $permission)

                  @if($permission->for == 'user')
                  <div class="checkbox">
                  <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                   </div>
                  @endif

                  @endforeach

                    
                    </div>

                    
                    <div class="col-lg-4">
                    <label for="">Other Permissions</label>
                    @foreach($permissions as $permission)

                  @if($permission->for == 'other')
                  <div class="checkbox">
                  <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                   </div>
                  @endif

                  @endforeach

                    
                    </div>

                    </div>

                  <div class="form-group">
                 <button type="submit" class="btn btn-primary">Submit</button>
                    <a  href = "{{route('category.index')}}" class="btn btn-warning">Back</a>
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