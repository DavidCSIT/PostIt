@extends('layouts.app')
@section('content')

<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Post it!</p>
        </div>
        <div class="form-content">
        <form method="POST" action="{{ route('register') }}">
                @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name *" value=""/>
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Email *" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Your Password *" value=""/>
                    </div>
                    <div class="form-group">
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password *" value=""/>
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit">
          </form>
        </div>
    </div>
</div>
@endsection
