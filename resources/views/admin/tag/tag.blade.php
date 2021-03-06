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
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messages')

            <form role="form" action="{{route('tag.store')}}" method="post">
             {{csrf_field()}}
              <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Post Tag</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Tag title">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Tag Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                    <br>
                    </br>
                  <div class="form-group">
                 <button type="submit" class="btn btn-primary">Submit</button>
                    <a  href = "{{route('tag.index')}}" class="btn btn-warning">Back</a>
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