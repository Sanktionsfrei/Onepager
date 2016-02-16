<footer>

    <div class="container" id="newsletter">

        <div class="contact-box wow rotateIn animated" data-wow-offset="10" data-wow-duration="1.5s">

            {{-- CONTACT BUTTON TO EXPAND OR COLLAPSE FORM --}}

            <a class="btn contact-button expand-form expanded"><i class="icon_mail_alt"></i></a>

            {{-- EXPANDED CONTACT FORM --}}
            <div class="row expanded-contact-form">

                <div class="col-md-8 col-md-offset-2">

                    {{-- SUBSCRIPTION FORM WITH TITLE --}}
                    <div class="subscription-form-container">

                        <h2 class="wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">Auf dem
                            Laufenden bleiben</h2>

                        {{-- FORM --}}

                        <form id="newsletter-form" class="subscription-form form-inline wow fadeInRight animated"
                              data-wow-offset="10" data-wow-duration="1.5s" role="form">

                            {!! csrf_field() !!}

                            {{-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES --}}
                            <h4 class="subscription-success text-success">Erfolgreich eingetragen!</h4>
                            <h4 class="subscription-error text-danger">Fehler!</h4>

                            {{-- EMAIL INPUT BOX --}}
                            <input type="email" name="email" id="subscriber-email" placeholder="E-Mail Adresse"
                                   class="form-control input-box" onclick="">

                            {{-- SUBSCRIBE BUTTON --}}
                            <button form="newsletter-form" type="submit" id="subscribe-button"
                                    class="btn btn-default standard-button">Abonnieren
                            </button>

                            {{-- Themen Checkboxes --}}
                            <div class="form-group text-left" id="themenkategorien">
                                <div class="row">
                                    @foreach($options as $option)
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="checkbox">
                                                <label for="{{ $option['name'] }}">
                                                    <input type="checkbox" name="{{ $option['name'] }}"
                                                           id="{{ $option['name'] }}">
                                                    {!! $option['label'] !!}
                                                </label>
                                            </div>
                                        </div>
                                        @if($option['data'])
                                            <div class="col-md-10 col-md-offset-1">
                                                <input class="form-control" name="{{ $option['name'] }}_data" id="{{ $option['name'] }}_data">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            {{-- END THEMEN CHECKBOXES --}}

                        </form>
                        {{-- END FORM --}}

                    </div>
                    {{-- END OF SUBSCRIPTION FORM WITH TITLE --}}

                </div>

            </div>
            {{-- /END EXPANDED FORM --}}

        </div>
        {{-- /END CONTACT BOX --}}

        {{-- LOGO --}}
        <img src="images/logo-grey-compact.svg" height="60px" alt="LOGO" class="responsive-img">

        {{-- SOCIAL ICONS --}}
        <ul class="social-icons">
            <li><a target="_blank" href="https://facebook.com/sanktionsfrei"><i class="social_facebook_square"></i></a>
            </li>
            <li><a target="_blank" href="https://twitter.com/sanktionsfrei"><i class="social_twitter_square"></i></a>
            </li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UC4DYx6s30apYjk86Fzc0_8g"><i class="social_youtube_square"></i></a>
            </li>
        </ul>

        {{-- COPYRIGHT TEXT --}}
        <p id="presse" class="copyright">
            Copyright &copy; 2016 Sanktionsfrei n.e.V. &middot; <a href="#press" data-toggle="modal" data-target="#press">Presse</a> &middot; <a href="{{ url('/faq') }}">Häufige Fragen</a> &middot; <a href="#impressum" data-toggle="modal" data-target="#impressum">Impressum</a>
        </p>

    </div>
    {{-- /END CONTAINER --}}

</footer>