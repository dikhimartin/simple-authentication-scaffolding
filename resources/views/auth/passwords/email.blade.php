@extends('layouts.backend.login')
@section('bodyClass', 'not-front')
@section('navActive', '')

@section('content')
    <!-- reset password -->
    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>{{ __('main.recover_password') }}</h3>
                                <p class="text-muted">{{ __('main.send_password_reset_link_detail') }}</p>
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger mt-2">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group text-center m-t-20">
                                <button type="submit" class="btn btn-info">
                                    {{ __('main.send_password_reset_link') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
