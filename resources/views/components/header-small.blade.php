<header class="header" data-stellar-background-ratio="0.5" id="home">


        {{-- STICKY NAVIGATION --}}
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top main-nav">
            <div class="container">
                <div class="navbar-header">

                    {{-- LOGO ON STICKY NAV BAR --}}
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kane-navigation">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="images/logo-black-large.svg" alt="Sanktionsfrei Logo" height="20px"></a>
                </div>

                {{-- NAVIGATION LINKS --}}
                <div class="navbar-collapse collapse" id="kane-navigation">
                    <ul class="nav navbar-nav navbar-right main-navigation">
                        <li><a href="{{ url('/') }}#home">Home</a></li>
                        <li><a href="{{ url('/') }}#kampagne">Kampagne</a></li>
                        <li><a href="{{ url('/') }}#hintergrund">Hintergrund</a></li>
                        <li><a href="{{ url('/') }}#features">Features</a></li>
                        <li><a href="{{ url('/') }}#unterstuetzen">Unterstützen</a></li>
                        <li><a href="{{ url('/') }}#newsletter">Newsletter</a></li>
                        <li><a href="{{ url('/') }}#presse" data-toggle="modal" data-target="#press">Presse</a></li>
                        <li><a href="{{ url('/') }}faq">Fragen</a></li>
                    </ul>
                </div>
            </div> {{-- /END CONTAINER --}}
        </div> {{-- /END STICKY NAVIGATION --}}

</header>