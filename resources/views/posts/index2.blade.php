@extends('layouts.app')
@section('content')

<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Post it!</p>
        </div>
    </div>



<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>post</td>
            <td>Colour</td>
            <td> </td>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->post }}</td>
            <td>{{ $value->colour }}</td>
            <td>
                <a class="mt-1 mx-auto btn btn-small btn-success" href="recipes/{{$value->id}}">Show this recipe</a>
                <a class="mt-1 mx-auto btn btn-small btn-info" href="recipes/{{$value->id}}/edit">Edit this recipe</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>



@endsection
