<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="row">
            <div class="col-xs-9">
                <h1>{{ trans('donation.heading') }}</h1>
            </div>
            <div class="col-xs-2 text-center">
                <span class="label label-pill label-primary">{{ $total }} €</span>
            </div>
            <div class="col-xs-1">
                <a class="btn btn-primary" href="{{ route('dashboard.donation.create') }}"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>