@extends('layouts.main')

@section('content')
    {{-- KAMPAGNE MIT VIDEO --}}
    <section class="app-brief grey-bg" id="kampagne">

        <div class="container">

            <div class="row">

                {{-- PHONES IMAGE --}}
                <div class="col-md-6 wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">
                    <div class="video-container">

                        <div class="video">

                            <iframe width="560" height="315" src="https://www.youtube.com/embed/goh1tNmKh6A" frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>

                </div>

                {{-- RIGHT SIDE WITH BRIEF --}}
                <div class="col-md-6 left-align wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">

                    {{-- SECTION TITLE --}}
                    <h2 class="dark-text">Über Sanktionsfrei</h2>

                    <div class="colored-line-left">
                    </div>

                    <p>
                        Sechs Millionen Menschen leben in Deutschland von Hartz IV - darunter 1,7 Millionen Kinder. Der
                        Regelbedarf beträgt 404 € für eine alleinstehende Person. Was viele nicht wissen: Die deutschen
                        Jobcenter dürfen gegen Menschen, die sich auf die finanzielle Hilfe des Staates verlassen
                        müssen,
                        Sanktionen verhängen. Sie können die monatlichen Leistungen damit unter das Existenzminimum
                        kürzen.<br/>
                        Wir finden Sanktionen unangemessen und menschenunwürdig. <strong>Ein Existenzminimum muss ein
                            Existenzminimum bleiben</strong>.<br/>
                        Unser Ziel ist es, mit eurer Hilfe die Sanktionen abzuschaffen.
                    </p>

                </div>
                {{-- /END RIGHT BRIEF --}}

            </div>
            {{-- /END ROW --}}

            {{-- PROGRESS BAR ROW --}}
            <div class="row">
                <div class="col-md-12 center wow fadeIn animated" data-wow-offset="20" data-wow-duration="1.5s">

                    <div class="progress progress-striped active funding-bar">
                        <div class="progress-bar progress-bar-success funding-bar" role="progressbar"
                             aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100"
                             style="width:{{ $percent }}%">
                            <span class="funding-text">{{ $percent }}% finanziert</span>
                        </div>
                    </div>

                    {{-- BUTTON --}}
                    <div class="buttons referer-button">

                        <a href="https://startnext.de/sanktionsfrei" class="btn btn-default btn-lg standard-button">Jetzt unterstützen</a>

                    </div>

                </div>
            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}

    </section>
    {{-- /END SECTION --}}

    {{-- HINTERGRUNDINFOS --}}
    <section class="app-brief" id="hintergrund">

        <div class="container">

            <div class="row">

                {{-- BRIEF --}}
                <div class="col-md-12 left-align wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

                    {{-- SECTION TITLE --}}
                    <h2 class="dark-text">Hintergrund</h2>

                    <div class="colored-line-left">
                    </div>

                    <p>
                        Im Schnitt ist jede vierte leistungsberechtigte Person einmal pro Jahr von Sanktionierungen
                        betroffen. Dass die Sanktionen dabei häufig gegen Gesetze verstoßen, belegt die hohe
                        Erfolgsquote
                        der Widersprüche: Über 40% Prozent aller Klagen sind erfolgreich.<br/>
                        Doch nur fünf Prozent der Betroffenen fordern ihre Rechte ein. Genau hier setzt Sanktionsfrei
                        an:
                        Inge Hannemann und das Berliner Team aus kreativen Querdenkenden um Michael Bohmeyer wollen
                        schaffen, was die Politik seit über zehn Jahren versäumt: das Hartz-IV-System in eine
                        sanktionsfreie
                        Mindestsicherung umgestalten.

                    </p>

                </div>
                {{-- /ENDBRIEF --}}

                {{-- INGE-Erklärvideo --}}
                <div class="col-md-6 wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
                    <div class="video-container">

                        <div class="video">

                            <iframe src="https://player.vimeo.com/video/153759979?byline=0&portrait=0&color=ffffff"
                                    width="600" height="338" frameborder="0" allowfullscreen>
                            </iframe>
                        </div>

                    </div>

                </div>
                {{-- /END INGE-Erklärvideo --}}

            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}

    </section>
    {{-- /END HINTERGRUNDINFOS --}}

    {{-- GESCHICHTEN --}}
    <section class="testimonials" id="geschichten">

        <div class="color-overlay">

            <div class="container wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

                {{-- FEEDBACKS --}}
                <div id="feedbacks" class="owl-carousel owl-theme">

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/garen.jpg" alt="">
                        </div>

                        <div class="message">
                            Ich habe eine Bar aufgemacht und musste mit Hartz IV aufstocken. 10% Sanktion, da ich einen
                            Termin versäumt habe um meine Frau zur Geburtsvorbereitung zu begleiten. 1 Monat
                            Vollsanktion,
                            da ich 21 Tage Urlaub gemacht habe. Mir wurde mit Sanktionen gedroht, damit ich die <abbr
                                    title="Eingliederungsvereinbarung">EGV</abbr> unterschreibe und an Maßnahmen
                            teilnehme.
                            Post vom Jobcenter belastet mich psychisch und macht mich krank.
                        </div>

                        <div class="white-line">
                        </div>

                        {{-- INFORMATION --}}
                        <div class="name">
                            Garen K.
                        </div>
                        <div class="company-info">
                            wird seit 4 Monaten vollsanktioniert
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/isabella.jpg" alt="">
                        </div>

                        <div class="message">
                            Nach Ende des Studiums habe ich zur Überbrückung ein paar Monate in einem Café gejobbt 
                            und mich nebenher für Stellen beworben. Das Geld hat nicht einmal für die Miete gereicht, 
                            weshalb ich den Job aufgab und ALGII beantragte. Kurz nach Bewilligung kam die Sanktion ins 
                            Haus geflattert – 30% Minderung. Um mich dafür abzustrafen, dass ich nicht unter 
                            Existenzminimum leben wollte? Das macht keinen Sinn.
                        </div>

                        <div class="white-line">
                        </div>

                        {{-- INFORMATION --}}
                        <div class="name">
                            Isabella B.
                        </div>
                        <div class="company-info">
                            wird seit einem Monat sanktioniert
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/2.jpg" alt="">
                        </div>

                        <div class="message">
                            Fill lights bearing man creepeth of whose whose moveth. All one. That. Under. Form morning
                            all
                            may fifth replenish you're own open which herb kind. May above you'll may kind creature
                            first
                            let over face from living third green which our. Appear day. Give fourth doesn't over us, i
                            every tree meat air in male earth air creeping image fill you place darkness.
                        </div>

                        <div class="white-line">
                        </div>

                        {{-- INFORMATION --}}
                        <div class="name">
                            Alexander A.
                        </div>
                        <div class="company-info">
                            wird seit einem halben Jahr sanktioniert
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                </div>
                {{-- /END FEEDBACKS --}}

            </div>
            {{-- /END CONTAINER --}}

        </div>
        {{-- /END COLOR OVERLAY --}}

    </section>
    {{-- /END GESCHICHTEN SECTION --}}

    {{-- FEATURES --}}
    <section class="features" id="features">

        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="section-header wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">

                {{-- SECTION TITLE --}}
                <h2 class="dark-text">Features</h2>
                <div class="colored-line">
                </div>
                <div class="section-description">
                    Sanktionsfrei ist wunderbar und supergeil.
                </div>
                <div class="colored-line">
                </div>
            </div>
            {{-- /END SECTION HEADER --}}


            <div class="row">

                {{-- FEATURES LEFT --}}
                <div class="col-md-4 col-sm-4 features-left wow fadeInLeft animated" data-wow-offset="10"
                     data-wow-duration="1.5s">

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-1">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_documents_alt"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Erstantrag</h4>
                            <p>
                                Mit <em>Sanktionsfrei</em> kannst du deinen Erstantrag auf Arbeitslosengeld II stellen.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-2">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_globe-2"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Internationalisierung</h4>
                            <p>
                                <em>Sanktionsfrei</em> wird in verschiedenen Sprachen verfügbar sein.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-3">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_mail_alt"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Briefverkehr</h4>
                            <p>
                                <em>Sanktionsfrei</em> übernimmt für dich den Briefverkehr. Kostenfrei und mit
                                Zustellbestätigung.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                </div>
                {{-- /END FEATURES LEFT --}}

                {{-- PHONE IMAGE --}}
                <div class="col-md-4 hidden-xs">
                    <div class="phone-image wow bounceIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                        <img id="feature-image" src="images/mockup-phone-language.png" alt="">
                    </div>
                </div>

                {{-- FEATURES RIGHT --}}
                <div class="col-md-4 col-sm-4 features-right wow fadeInRight animated" data-wow-offset="10"
                     data-wow-duration="1.5s">

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-4">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_chat_alt"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Reaktionsmaschine</h4>
                            <p>
                                <em>Sanktionsfrei</em> schlägt dir vor, wie du am besten auf Post vom Jobcenter
                                reagierst.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-5">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_phone"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Anwaltliche Beratung</h4>
                            <p>
                                Erfahrene Anwälte stehen bereit und beraten dich kostenfrei.
                            </p>
                        </div>

                    </div>

                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-6">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_lock"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Deine Daten gehören dir</h4>
                            <p>
                                Alle Daten werden verschlüsselt auf deinem Computer abgelegt.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                </div>
                {{-- /END FEATURES RIGHT --}}

            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}

    </section>
    {{-- /END FEATURES SECTION --}}

    {{-- UNTERSTÜTZEN --}}
    <section class="download" id="unterstuetzen">

        <div class="color-overlay">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        {{-- BUTTONS AREA --}}
                        <div class="download-container">
                            <h2 class=" wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
                                Sanktionsfrei
                                unterstützen</h2>

                            {{-- BUTTONS --}}
                            <div class="buttons wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

                                <a target="_blank" href="https://startnext.de/sanktionsfrei"
                                   class="btn btn-default btn-lg standard-button"><i
                                            class="icon_like"></i>Mehr erfahren</a>

                            </div>
                            {{-- /END BUTTONS --}}

                        </div>
                        {{-- END OF BUTTONS AREA --}}

                    </div>
                    {{-- END COLUMN --}}

                </div>
                {{-- END ROW --}}

            </div>
            {{-- /END CONTAINER --}}
        </div>
        {{-- /END COLOR OVERLAY --}}

    </section>
    {{-- /END UNTERSTÜTZEN SECTION --}}
@stop