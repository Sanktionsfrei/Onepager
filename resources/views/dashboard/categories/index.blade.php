@extends('dashboard.layout')

@section('sidebar')

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.categories.create') }}">{{ trans('nav.categories.create') }}</a>
    </li>

@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td><a class="btn btn-info" href="{{ route('dashboard.categories.edit', $category) }}"><i
                                        class="fa fa-edit"></i></a></td>
                        <td>
                            <form method="post" action="{{ route('dashboard.categories.destroy', $category) }}">
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
@endsection