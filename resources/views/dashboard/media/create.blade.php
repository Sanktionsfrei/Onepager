@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    Upload a Image
                </div>
                <div class="card-block">
                    <form method="post" action="{{ route('dashboard.media.store') }}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <fieldset class="form-group @if($errors->has('name')) has-warning @endif">
                            <label for="name">{{ trans('image.name.label') }}</label>
                            <input type="text" class="form-control form-control-warning" name="name" value="{{ old('name') }}">
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
                        <fieldset class="form-group @if($errors->has('file')) has-warning @endif">
                            <label for="">{{ trans('image.file.label') }}</label>
                            <input type="file" class="form-control form-control-warning" name="file">
                            @if($errors->has('file'))
                                <div class="c-input__error">
                                    <ul class="list-unstyled">
                                        @foreach($errors->get('file') as $msg)
                                            <li class="text-warning">{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>
                        <div class="text-xs-right">
                            <button class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
