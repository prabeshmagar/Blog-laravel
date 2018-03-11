@extends('user/app')
@section('bg-img',Storage::disk('local')->url($post->image ))
@section('head')
  <link rel="stylesheet" href="{{url('user/css/prism.css')}}">
@endsection

@section('title',$post->title)
@section('sub-heading', $post->subtitle)

@section('main-content')

  <!-- Post Content -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=528962780802912';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <article>
      <div class="container">
        <div class="row">
        
          <div class="col-lg-8  col-lg-offset-2 col-md-10 col-md-offset-1">
          <small><strong>created at</strong> {{$post->created_at->diffForHumans()}}</small>
         
            @foreach ($post->categories as $category)
            <a href=""><small class="pull-right" style="float: right; margin-right:20px">
            {{$category->name}}
             </small> </a>
            @endforeach

            @section('footer')
                <script src="{{url('user/js/prism.js')}}"></script>
            @endsection
          
          <br>
            {!!htmlspecialchars_decode($post->body)!!}

            <!-- Tag clouds -->
                <h3>Tag Clouds</h3>
            @foreach ($post->tags as $tag)
            <a href=""><small class="pull-left" style=" margin-right:20px;border-radius:5px; border:1px solid gray;padding:5px;">
              {{$tag->name}}
             </small> </a>
            @endforeach

          </div>
          <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10"></div>
        </div>
      </div>
    </article>

    <hr>
@endsection