<nav class="navbar navbar-fixed-top navbar-light bg-faded">
    <a class="navbar-brand" href="/">{{ trans('gui.title') }}</a>
    <ul class="nav navbar-nav pull-xs-left">
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.newsletter.index') }}">{{ trans('nav.newsletter') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.donation.index') }}">{{ trans('nav.donation') }}</a></li>

        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.posts.index') }}">{{ trans('nav.posts') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.categories.index') }}">{{ trans('nav.categories') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.media.index') }}">{{ trans('nav.media') }}</a></li>
    </ul>
    <ul class="nav navbar-nav pull-right">
        @if(!Auth::guest())
            <li class="nav-item">

                <a href="/auth/logout" class="nav-link">{{ trans('gui.logout') }}</a>
            </li>
        @endif
    </ul>
</nav>







