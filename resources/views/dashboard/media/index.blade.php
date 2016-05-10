@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-xs-1o">
            <h2>Media Library</h2>
        </div>
        <div class="col-xs-2">
            <a href="{{ route('dashboard.media.create') }}" class="btn btn-primary"><i class="fa fa-upload"></i>Upload</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Base Url</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>Image</td>
                        <td>{{ $item->size }}</td>
                        <td>{{ $item->url }}</td>
                        <td>
                            <form action="{{ route('dashboard.media.destroy', [ 'medium' => $item]) }}" method="post">
                                {!! method_field('delete') !!}
                                {!! csrf_field() !!}
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="table-info">
                        <td colspan="5"><h4>You have no media items, yet.</h4></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop