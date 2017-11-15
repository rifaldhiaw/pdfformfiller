@extends('layouts.form')

@section('title', 'Login as Admin')
@section('h1', 'Login as Admin')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
                <div class="login">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-12">
                                    <input id="password" type="password" class="form-control" name="password" required
                                    placeholder="Password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-info">
                                        Login
                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection