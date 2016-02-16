<header class="header" data-stellar-background-ratio="0.5" id="home">

    {{-- COLOR OVER IMAGE --}}
    <div class="color-overlay">

        {{-- STICKY NAVIGATION --}}
        <div id="main-nav" class="navbar navbar-inverse bs-docs-nav navbar-fixed-top main-nav">
            <div class="container">
                <div class="navbar-header">

                    {{-- LOGO ON STICKY NAV BAR --}}
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kane-navigation">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#home"><img src="images/logo-black-large.svg" alt="Sanktionsfrei Logo" height="20px"></a>

                </div>

                {{-- NAVIGATION LINKS --}}
                <div class="navbar-collapse collapse" id="kane-navigation">
                    <ul class="nav navbar-nav navbar-right main-navigation">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#kampagne">Kampagne</a></li>
                        <li><a href="#hintergrund">Hintergrund</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#unterstuetzen">Unterstützen</a></li>
                        <li><a href="#newsletter">Newsletter</a></li>
                        <li><a href="#presse" data-toggle="modal" data-target="#press">Presse</a></li>
                        <li><a href="{{ url('/') }}faq">Fragen</a></li>
                    </ul>
                </div>
            </div> {{-- /END CONTAINER --}}
        </div> {{-- /END STICKY NAVIGATION --}}


        {{-- CONTAINER --}}
        <div class="container container-intro">

            {{-- ONLY LOGO ON HEADER --}}
            <div class="only-logo">
                <div class="navbar navbar-intro">
                    <div class="navbar-header">
                        <img src="images/logo-white-compact.svg" height="120px" alt="Sanktionsfrei Logo">
                    </div>
                </div>
            </div> {{-- /END ONLY LOGO ON HEADER --}}

            <div class="row home-contents">
                <div class="col-xs-12">

                    {{-- HEADING AND BUTTONS --}}
                    <div class="intro-section">

                        {{-- WELCOM MESSAGE --}}
                        <h1 class="intro text-xs-center text-center">Die Würde des Menschen ist<br> sanktionsfrei.</h1>

                        {{-- BUTTON --}}
                        <div class="buttons text-xs-center text-center" id="download-button">

                            <a href="https://startnext.de/sanktionsfrei" target="_blank" class="btn btn-default btn-lg standard-button">Mehr erfahren</a>

                        </div>
                        {{-- /END BUTTONS --}}

                    </div>
                    {{-- /END HEADING AND BUTTONS --}}

                </div>

            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}
    </div>
    {{-- /END COLOR OVERLAY --}}
</header>