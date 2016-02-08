<header class="header" data-stellar-background-ratio="0.5" id="home">

    {{-- COLOR OVER IMAGE --}}
    <div class="color-overlay"> {{-- To make header full screen. Use .full-screen class with color overlay. Example: <div class="color-overlay full-screen">  --}}

        {{-- STICKY NAVIGATION --}}
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation">
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
                    </ul>
                </div>
            </div> {{-- /END CONTAINER --}}
        </div> {{-- /END STICKY NAVIGATION --}}


        {{-- CONTAINER --}}
        <div class="container">

            {{-- ONLY LOGO ON HEADER --}}
            <div class="only-logo">
                <div class="navbar">
                    <div class="navbar-header">
                        <img src="images/logo-white-compact.svg" height="80px" alt="Sanktionsfrei Logo">
                    </div>
                </div>
            </div> {{-- /END ONLY LOGO ON HEADER --}}

            <div class="row home-contents">
                <div class="col-md-6 col-sm-6">

                    {{-- HEADING AND BUTTONS --}}
                    <div class="intro-section">

                        {{-- WELCOM MESSAGE --}}
                        <h1 class="intro">Die Würde des Menschen ist Sanktionsfrei.</h1>

                        {{-- BUTTON --}}
                        <div class="buttons" id="download-button">

                            <a href="https://startnext.de/sanktionsfrei" target="_blank" class="btn btn-default btn-lg standard-button"><i class="icon_like"></i>Zur Kampagne</a>

                        </div>
                        {{-- /END BUTTONS --}}

                    </div>
                    {{-- /END HEADING AND BUTTONS --}}

                </div>


                <div class="col-md-6 col-sm-6 hidden-xs">
                    {{-- PHONE IMAGE WILL BE HIDDEN IN TABLET PORTRAIT AND MOBILE --}}
                    <div class="phone-image">
                        <img src="images/mockup-phone.png" class="img-responsive" alt="Sanktionsfrei Prototyp">
                    </div>
                </div>

            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}
    </div>
    {{-- /END COLOR OVERLAY --}}
</header>