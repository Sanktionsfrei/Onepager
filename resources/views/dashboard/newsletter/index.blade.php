@extends('dashboard.layout')

@section('content')
    @include('dashboard.newsletter._partials.header')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>{{ trans('newsletter.date.label') }}</th>
                    <th>{{ trans('newsletter.date.label') }}</th>
                    <th>{{ trans('newsletter.info.label') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($subscribers as $subscriber)
                    <tr>
                        <th scope="row">{{ $subscriber->created_at->format('Y-m-d') }}</th>
                        <td>{{ $subscriber->email }}</td>
                        <td>
                            <ul class="list-unstyled">
                                @foreach($subscriber->onepager_options as $option)
                                <li>{{ $option['label'] }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            {!!  $subscribers->render() !!}
        </div>
    </div>
@endsection