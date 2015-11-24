@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="card">

                <div class="card-block">
                    <h4 class="card-title">{{ trans('auth.login.title') }}</h4>
                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}

                        <fieldset class="form-group @if($errors->has('email')) has-error @endif">
                            <label for="email">{{trans('auth.login.email')}}</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{trans('auth.login.email_placeholder')}}">
                            <small class="text-muted">{{trans('auth.login.email_description')}}</small>
                            @if($errors->has('email'))
                                <div class="c-input__error">
                                    <ul>
                                        @foreach($errors->get('email') as $msg)
                                            <li>{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>

                        <fieldset class="form-group @if($errors->has('password')) has-error @endif">
                            <label for="password">{{trans('auth.login.password')}}</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                            @if($errors->has('password'))
                                <div class="c-input__error">
                                    <ul>
                                        @foreach($errors->get('password') as $msg)
                                            <li>{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> {{ trans('auth.login.remember_me') }}
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">{{trans('auth.login.submit')}}</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <a href="/auth/register">{{trans('auth.login.register_link')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection