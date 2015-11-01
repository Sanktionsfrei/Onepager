<nav class="navbar navbar-fixed-top navbar-light bg-faded">
    <a class="navbar-brand" href="/">{{ trans('gui.title') }}</a>
    <ul class="nav navbar-nav pull-right">
        @if(!Auth::guest())
        <a href="/auth/logout" class="btn btn-default">{{ trans('gui.logout') }}</a>
        @endif
    </ul>
</nav>







