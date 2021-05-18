@extends('layouts.app')
@section('content')

<div class="row ">
    @foreach($posts as $post)
      <div class="col-sm-4 my-1">
        <div class="card">
          <div class="card-body @if ($post->colour == "Yellow") bg-warning @endif">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{ $post->content }}</p>

            <form action="/posts/{{$post->id}}" method="POST">
              @method('DELETE')
              @csrf

              <a class="btn btn-primary mx-1 " href="/posts/{{$post->id}}">Show</a>
                @auth
              <a class="btn btn-success mx-1" href="/posts/{{$post->id}}/edit">Edit</a>
              <button type="submit" title="delete" class="btn btn-danger mx-1" >Delete</button>
               @endauth
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
