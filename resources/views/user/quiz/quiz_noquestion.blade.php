@extends('layouts.app')

@section('css')
<style>
    .quiz-page {
        margin: 0 auto;
        max-width: 700px;
    }
    .quiz-page .quiz-title {
        font-size: 32px;
        font-weight: 600;
        line-height: 48px;
        color: #333;
    }
    .quiz-page .quiz-route {
        margin-bottom: 40px;
    }
    .quiz-page .quiz-route a {
        color: #727272;
        text-decoration: underline;
    }
</style>
@endsection

@section('content')

<section aria-label="section" class="sm-mt-0">
    <div class="container">
        <div class="quiz-page">
            <div class="quiz-title">{{ $quiz->title }}</div>
            <!-- <div class="quiz-route">
                <a href="{{ url('/') }}">Home</a> / Quiz / {{ $quiz->title }}
            </div> -->
            <div>No questions available</div>
        </div>
    </div>
</section>
@endsection

@section('js')
@endsection
