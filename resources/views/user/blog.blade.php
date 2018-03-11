@extends('user.app')


@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Welcome to  Post')
@section('sub-heading','Welcome to JuHangle')
@section('head')
  <style>
      .fa-thumbs-up:hover{
        color:red;
       
      }
  

  </style>
@endsection
@section('main-content')

<!-- Main Content -->
<div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">
        @foreach($posts as $post)

          <div class="post-preview">
         
           <a href=" {{ route('post',$post->slug) }}">
                  <h2 class="post-title">
                  {{$post->title}}
                  </h2>
                  <h3 class="post-subtitle">
                  {{$post->subtitle}}
                  </h3>
                </a>

                <p class="post-meta">Posted by
                  <a href="#">Start Bootstrap</a>
                  {{$post->created_at->diffForHumans()}}

                  <a href="">
                  <small>0</small>
                   <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                  </p>
              </div>
          @endforeach
          <hr>
       
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            {{$posts->links()}}
          
          </div>
        </div>
      </div>
    </div>

    <hr>

@endsection


