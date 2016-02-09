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
                        Sechs Millionen Menschen leben in Deutschland von Hartz IV - darunter 1,7 Millionen Kinder. Der Regelbedarf beträgt 404 € für eine alleinstehende Person. Was viele nicht wissen: Die Jobcenter verhängen gegen Menschen, die sich auf die finanzielle Hilfe des Staates verlassen müssen, Sanktionen. Sie kürzen die monatlichen Leistungen damit unter das Existenzminimum.<br/>
                        Wir finden Sanktionen unangemessen und menschenunwürdig.<br/>
                        <strong>Ein Existenzminimum muss ein Existenzminimum bleiben</strong>.<br/>
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
                            <span class="funding-text" style="display: block; width: 120px; color: #dddddd">{{ $percent }}% finanziert</span>
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
                            <img src="images/clients-pic/garen.jpg" alt="Garen">
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
                            vom Jobcenter vollsanktioniert
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/isabella.jpg" alt="Isabella">
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
                            vom Jobcenter sanktioniert
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/aa.jpg" alt="Agentur für Arbeit Logo">
                        </div>

                        <div class="message">
                            Ich war zweieinhalb Jahre in einem Jobcenter als Arbeitsvermittler tätig. Grundsätzlich geht es nur 
                            sekundär um diejenigen, denen dort geholfen werden soll. Das Führungspersonal steht unter großem Druck, 
                            gewünschte Zahlen zu produzieren; diesem Ziel wird dort alles untergeordnet. Einmal hieß es: 
                            »Bei den Sanktionen sind wir im vorderen Drittel, weiter so!« Eines der wichtigsten Ziele eines 
                            Jobcenters ist die Senkung der passiven Leistung, da sind Sanktionen das einfachste Mittel.
                        </div>

                        <div class="white-line">
                        </div>

                        {{-- INFORMATION --}}
                        <div class="name">
                            Jobcentermitarbeiter, will anonym bleiben
                        </div>
                        <div class="company-info">
                            muss sanktionieren
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
                    Mit diesen Features wollen wir anfangen.
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
                            <h4 class="main-color">Online-Anträge</h4>
                            <p>
                                Mit Sanktionsfrei kannst du deine Anträge unkompliziert online ausfüllen.
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
                            <h4 class="main-color">Mehrsprachigkeit</h4>
                            <p>
                                Sanktionsfrei wird in verschiedenen Sprachen verfügbar sein.
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
                                Sanktionsfrei übernimmt für dich den Briefverkehr, kostenfrei und mit
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
                        <img id="feature-image" src="images/screenshots/features/1.png" alt="">
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
                                Sanktionsfrei schlägt dir vor, wie du am besten auf Post vom Jobcenter
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
                                Erfahrene Anwälte stehen bereit und beraten per Videochat.
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
                                Alle Daten werden verschlüsselt auf deinem Computer abgelegt und nur bei Bedarf übertragen.
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
                                   class="btn btn-default btn-lg standard-button">Mehr erfahren</a>

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