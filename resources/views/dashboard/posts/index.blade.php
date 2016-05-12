@extends('dashboard.layout')

@section('sidebar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.posts.create') }}">{{ trans('nav.posts.create') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.categories.index') }}">{{ trans('nav.categories.index') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.media.index') }}">{{ trans('nav.media.index') }}</a>
    </li>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>{{ trans('post.date.label') }}</th>
                    <th>{{ trans('post.title.label') }}</th>
                    <th>{{ trans('post.created.label') }}</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->created_at->format('d. M') }}</th>
                        <td>{{ $donation->title }}</td>
                        <td><a class="btn btn-info" href="{{ route('dashboard.posts.edit', $post) }}"><i
                                        class="fa fa-edit"></i></a></td>
                        <td>
                            <form method="post" action="{{ route('dashboard.posts.destroy', $post) }}">
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
            {!!  $posts->render() !!}
        </div>
    </div>
@endsection