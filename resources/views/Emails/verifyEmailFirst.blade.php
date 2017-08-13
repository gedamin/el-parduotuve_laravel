@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="call-to-action featured featured-secondary mb-xl">
            <div class="call-to-action-content">
                <h3>Registracijos <strong>patvirtinimo</strong> procedūra!</h3>
                <p>Kad prisijungti, patvirtinkite registraciją. Patvirtinimo laiškas išsiųstas į Jūsų paštą.</p>
            </div>
            <div class="call-to-action-btn">
                <a class="btn btn-lg btn-primary" href="{{route('login')}}">Prisijungti</a>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="circular-bar">
                            <div class="circular-bar-chart" data-percent="50" data-plugin-options="{'size': 175, 'lineWidth': 3, 'barColor': '#e36159', 'trackColor': '#CCC'}">
                                <strong>Patikrinkite</strong>
                                <label>El-paštą</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="circular-bar">
                            <div class="circular-bar-chart" data-percent="75" data-plugin-options="{'size': 175, 'lineWidth': 10, 'lineCap': 'square','barColor': '#383f48'}">
                                <strong>Patvirtinkite</strong>
                                <label>registraciją</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="circular-bar">
                            <div class="circular-bar-chart" data-percent="100" data-plugin-options="{'size': 175, 'lineWidth': 15, 'lineCap': 'square',  'barColor': '#2baab1'}">
                                <strong>Talpinkite</strong>
                                <label>Portfolio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="tall">
            </div>
        </div>
    </div>
@endsection