@extends('dashboard.layout')

@section('content')
    @include('dashboard.donation._partials.header')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>{{ trans('donation.date.label') }}</th>
                    <th>{{ trans('donation.name.label') }}</th>
                    <th>{{ trans('donation.amount.label') }}</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($donations as $donation)
                    <tr>
                        <th scope="row">{{ $donation->created_at->format('d. M') }}</th>
                        <td>{{ $donation->name }}</td>
                        <td>{{ $donation->amount }}</td>
                        <td><a class="btn btn-info" href="{{ route('dashboard.donation.edit', $donation) }}"><i class="fa fa-edit"></i></a></td>
                        <td>
                            <form method="post" action="{{ route('dashboard.donation.destroy', $donation) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="btn btn-warning-outline" href=""><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            {!!  $donations->render() !!}
        </div>
    </div>
@endsection