@extends('layout')

@section('content')
<section class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-8 col-lg-offset-2">
            <div class="jumbotron">
                <h1 class="text-center">Sanktionsfrei</h1>

                <h3 class="text-center">Hartz IV zu einer <strong>sanktionsfreien</strong> Mindestsicherung machen. </h3>

                <h4 class="text-center">Sanktionsfrei geht bald online.<br> Bleib auf dem Laufenden und trag dich in unseren Newsletter ein!</h4>
                <hr>
                <form id="form" class="form-horizontal" role="form">

                    {!! csrf_field() !!}

                    <div class="form-group form-group-lg">
                        <div class="col-sm-8 col-sm-offset-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <h4 class="text-center">Bitte sag uns, warum du dich für Sanktionsfrei interessierst (Mehrfachnennungen möglich):</h4>
                    @foreach($options as $option)
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="{{ $option['name'] }}"> {{ $option['label'] }}
                                </label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="success" class="alert alert-success text-center" style="display: none">
                        <strong>Danke für dein Interesse.</strong>
                    </div>
                    <div id="error" class="alert alert-warning text-center" style="display: none">
                        <strong>Ups!</strong> <span></span>
                    </div>
                    <div id="form-button" class="form-group text-center form-button">
                        <div>
                            <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-envelope-o"></i> Newsletter abonnieren</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection