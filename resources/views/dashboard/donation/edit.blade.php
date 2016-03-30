@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-1">
                    <a class="btn btn-primary" href="{{ route('dashboard.donation.index') }}"><i
                                class="fa fa-arrow-circle-left"></i></a>
                </div>
                <div class="col-xs-9">
                    <h1>{{ trans('donation.heading.update') }}</h1>
                </div>
                <div class="col-xs-2 text-center">
                    <span class="label label-pill label-primary"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="card">
                <div class="card-block">

                    <form method="post" action="{{ route('dashboard.donation.update', $donation) }}">

                        {{ csrf_field() }}

                        {{ method_field('PUT') }}

                        <fieldset class="form-group @if($errors->has('name')) has-warning @endif">
                            <label for="name">{{ trans('donation.name.label') }}</label>
                            <input type="text" class="form-control form-control-warning" name="name"
                                   value="{{ $donation->name }}">
                            @if($errors->has('name'))
                                <div class="c-input__error">
                                    <ul class="list-unstyled">
                                        @foreach($errors->get('name') as $msg)
                                            <li class="text-warning">{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>

                        <fieldset class="form-group @if($errors->has('amount')) has-warning @endif">
                            <label for="amount">{{ trans('donation.amount.label') }}</label>
                            <input type="number" class="form-control form-control-warning" name="amount"
                                   value="{{ $donation->amount }}">
                            @if($errors->has('amount'))
                                <div class="c-input__error">
                                    <ul class="list-unstyled">
                                        @foreach($errors->get('amount') as $msg)
                                            <li class="text-warning">{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>

                        <div class="text-xs-right">
                            <button class="btn btn-success">{{ trans('gui.update') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection