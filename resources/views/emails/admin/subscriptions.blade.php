@extends('emails.layout')
@section('content')
    <h2>Subscriptions zum Newsletter der letzten 24 Stunden</h2>
    <ul>
        @forelse($subscriptions as $subscription)
            <li>{{ $subscription->email }}
                <small>
                {{ $subscription->onepager_options }}
                </small>
            </li>
        @empty
            <li>Keine Subscriptions</li>
        @endforelse
    </ul>
@endsection