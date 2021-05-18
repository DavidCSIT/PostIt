@extends('layouts.app')
@section('content')

    <div class="form-content">
    <form method="POST" action="/posts">
            @csrf

            <div class="row">
              <div class="form-group col-6">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="">
              </div>

              <div class="form-group col-6">
                <label for="title">Colour</label>
                <input type="text" class="form-control @error('colour') is-invalid @enderror" id="colour" name="colour" value="">
              </div>
            </div>

            <div class="row">
              <label for="content">Content</label>
              <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10"></textarea>
            </div>
            <br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-warning mx-1" href="/posts/">Cancel</a>
    </form>
  </div>

@endsection
