@extends('admin.layout.app')

@section('headSection')
<link rel="stylesheet" href="{{url('admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

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


            <form role="form" action="{{Route('post.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="box-body">
                  <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Post Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Post SubTitle</label>
                  <input type="text" class="form-control" id="sub" name="subtitle" placeholder="Sub Title">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                </div>
                  </div>
               
                  <div class="col-lg-6">
                  <div class="form-group">
                  <br>
                  <!-- FILE INPUT -->
                  <div class="pull-right">
                  <label for="exampleInputFile">File input</label>
                <input type="file" name="image" id="image">
                  </div>
                
                  
                  <!-- CHECK BOX -->
              <div class="checkbox" name="status" class="pull-left">
                <label>
                  <input type="checkbox" name="status" value=1> Publish
                </label>
                
              </div>

              </div>
              <br>
            
              <!-- FOR CATEGORIES SELECTION  -->
              <div class="form-group">
              <label>Select Tags</label>
              <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">

              @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                
              @endforeach
            </select>
             
            </div>
        <!-- FOR TAG SELECTION -->
            <div class="form-group">
              <label>Select Categories</label>
              <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              
            @endforeach
            </select>
             
            </div>
                </div>
                  </div>
              
              </div>
              <!-- /.box-body -->
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write post body
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                <textarea  name ="body"
                 style="width: 100%; height:500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
            
            </div>
          </div>
        </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href = "{{route('post.index')}}" class="btn btn-warning">Back</a>
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

@section('footerSection')
<script src="{{url('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

  <script src="{{url('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <script>
   $(document).ready(function(){

      $(".select2").select2();

   });
  
  
  
  
  </script>
@endsection