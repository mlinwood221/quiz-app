@extends('layouts.app')

@section('css')
<style>
    .badge-page {
        /* max-width: 1000px; */
        margin: 0 auto;
        padding: 80px 0px;
    }
    .badge-page a {
        text-decoration: underline;
    }
    .badge-page .custom-status-message {
        align-items: center;
        background: #fff2ab;
        border-radius: 5px;
        font-size: 1.2rem;
        padding: 16px 18px 14px;
        text-align: center;
        margin-bottom: 60px;
    }
    .badge-page .custom-status-message p {
        margin-bottom: 0px;
        font-size: 16px;
    }
    .badge-page .badges-list > div > img {
        
    }
    .badge-page .badges-list > div > div:nth-child(3) {
        font-size: 14px;
        line-height: 21px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="badge-page">
        <!-- <div class="page-title">Badges</div> -->
        @if (!Auth::check())
        <div class="custom-status-message">
            <p>
                <strong>NOTE:</strong> You need to be logged in to an account in order to make progress towards unlocking these badges.
            </p>
        </div>
        @endif
        <div class="row badges-list">
            <!-- <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/i-got-friends.png') }}" alt="I Got Friends" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: 0.1">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">I Got Friends</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Refer 5 friends</div>
            </div> -->
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/expert.png') }}" alt="Expert" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->expert) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Expert</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete 50 quizzes with at least 75% score</div>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/novice.png') }}" alt="Novice" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->novice) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Novice</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete 10 quizzes with at least 75% score</div>
            </div>
            <!-- <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/i-got-more-friends.png') }}" alt="I Got More Friends" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: 0.1">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">I Got More Friends</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Refer 10 friends</div>
            </div> -->
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/advanced.png') }}" alt="Advanced" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->advanced) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Advanced</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete 25 quizzes with at least 75% score</div>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/local-celebrity.png') }}" alt="Local Celebrity" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->local_celebrity) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Local Celebrity</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete 10 <a href="{{ url('category/celebrities') }}">Celebrity</a> quizzes with a 100% score</div>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/newbie.png') }}" alt="Newbie" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->newbie) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Newbie</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete your first quiz with at least a 75% score</div>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/gamer-4-life.png') }}" alt="Gamer 4 Life" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->gamer_life) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Gamer 4 Life</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete 10 <a href="{{ url('category/gaming') }}">Gaming</a> quizzes with a 100% score</div>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/couch-potato.png') }}" alt="Couch Potato" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->couch_potato) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Couch Potato</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete 10 <a href="{{ url('category/movies-and-tv') }}">Movies &amp; TV</a> quizzes with a 100% score</div>
            </div>
            <!-- <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/i-got-too-many-friends.png') }}" alt="I Got Too Many Friends" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: 0.1">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">I Got Too Many Friends</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Refer 50 friends</div>
            </div> -->
            <!-- <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/ho-ho-ho.png') }}" alt="Ho Ho Ho" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: 0.1">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Ho Ho Ho</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Completed 10 quizzes in December</div>
            </div> -->
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/around-the-world.png') }}" alt="Around The World" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->around_the_world) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Around The World</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete 10 <a href="{{ url('category/geography') }}">Geography</a> quizzes with a 100% score</div>
            </div>
            <!-- <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/sitting-on-the-throne.png') }}" alt="Sitting On The Throne" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: 0.1">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Sitting On The Throne</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Finish a month at the top of the leaderboard</div>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/king-of-the-hill.png') }}" alt="King Of The Hill" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: 0.1">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">King Of The Hill</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Finish 6 months at the top of the leaderboard</div>
            </div> -->
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/got-the-x-factor.png') }}" alt="Got The X Factor" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->got_x_factor) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">Got The X Factor</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete the <a href="{{ url('quiz/x-factor-quiz') }}">X Factor</a> quiz with a 100% score</div>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img src="{{ asset('images/badges/world-cup-winner.png') }}" alt="World Cup Winner" style="display: block; margin: 0 auto; max-height: 65px; max-width: 100%; opacity: {{ (Auth::check() && Auth::user()->badge && Auth::user()->badge->world_cup_winner) ? '1' : '0.1' }}">
                <div style="font-weight: bold; margin: 8px 0 0; text-align: center;">World Cup Winner</div>
                <div style="font-size: 0.9rem; margin: 0 0 31px; text-align: center;">Complete the <a href="{{ url('quiz/world-cup-quiz') }}">World Cup</a> quiz with a 100% score</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection