@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="card">

                <div class="card-block">
                    <h4 class="card-title">{{ trans('auth.register.title') }}</h4>
                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <fieldset class="form-group @if($errors->has('username')) has-error @endif">
                            <label for="name">{{trans('auth.register.name')}}</label>
                            <input type="test" class="form-control" name="username" value="{{ old('username') }}" placeholder="{{trans('auth.register.name_placeholder')}}">
                            @if($errors->has('username'))
                                <div class="c-input__error">
                                    <ul>
                                        @foreach($errors->get('name') as $msg)
                                            <li>{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>

                        <fieldset class="form-group @if($errors->has('email')) has-error @endif">
                            <label for="email">{{trans('auth.register.email')}}</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{trans('auth.register.email_placeholder')}}">
                            <small class="text-muted">{{trans('auth.register.email_description')}}</small>
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
                            <label for="password">{{trans('auth.register.password')}}</label>
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

                        <fieldset class="form-group @if($errors->has('password_confirmation')) has-error @endif">
                            <label for="password_confirmation">{{trans('auth.register.password_confirmation')}}</label>
                            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                            @if($errors->has('password_confirmation'))
                                <div class="c-input__error">
                                    <ul>
                                        @foreach($errors->get('password_confirmation') as $msg)
                                            <li>{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>

                        <button type="submit" class="btn btn-primary">{{trans('auth.register.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection