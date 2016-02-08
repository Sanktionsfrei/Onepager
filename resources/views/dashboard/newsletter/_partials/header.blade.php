<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="row">
            <div class="col-xs-9">
                <h1>{{ trans('newsletter.heading') }}</h1>
            </div>
            <div class="col-xs-2 text-center">
                <span class="label label-pill label-primary">{{ $count }} {{ trans('newsletter.count') }}</span>
            </div>
            <div class="col-xs-1">
                <a href="/dashboard/export" class="btn btn-info-outline"><i class="fa fa-download"></i></a>
            </div>
        </div>
    </div>
</div>