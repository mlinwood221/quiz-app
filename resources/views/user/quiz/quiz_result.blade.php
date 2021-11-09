@extends('layouts.app')

@section('css')
<style>
    .quiz-result-page {
        margin: 0 auto;
        max-width: 1000px;
    }
    .quiz-result-page .quiz-title {
        font-size: 32px;
        line-height: 48px;
        font-weight: 600;
        color: #333;
        margin-bottom: 40px;
    }
    .quiz-result-page .quiz-route {
        margin-bottom: 40px;
    }
    .quiz-result-page .quiz-route a {
        color: #727272;
        text-decoration: underline;
    }    
    .quiz-result-page .quiz-result {
        background: #aaaaaa;
        text-align: center;
        font-weight: 500;
        color: black;
        padding: 10px;
        border-radius: 5px;
        position: relative;
        margin-top: 15px;
        margin-bottom: 40px;
    }
    .quiz-result-page .quiz-result span {
        position: relative;
        color: white;
    }
    .quiz-result-page .quiz-result .quiz-result-progress {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        background: var(--secondary-color);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    .quiz-result-page .share-section {
        background: #dbdbdb;
        border-radius: 5px;
        padding: 20px;
        color: #555;
        text-align: center;
    }
    .quiz-result-page .share-facebook {
        margin-top: 20px;
        width: 100%;
        display: block;
        background: #3b5998;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .quiz-result-page .share-twitter {
        margin-top: 20px;
        width: 100%;
        display: block;
        background: #1da1f2;
        border-radius: 5px;
    }
    .quiz-result-page .quiz-image {
        margin-top: 40px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        margin-bottom: 20px;
        width: 100%;
    }
    .quiz-result-page .quiz-headline {
        margin-bottom: 20px;
    }
    .quiz-result-page .quiz-retry {
        display: block;
        width: 100%;
        margin-top: 40px;
    }
</style>
@endsection

@section('content')
<section aria-label="section" class="sm-mt-0">
    <div class="container">
        <div class="quiz-result-page">
            <div class="quiz-title">{{ $quiz->title }}</div>
            <!-- <div class="quiz-route">
                <a href="{{ url('/') }}">Home</a> / Quiz / {{ $quiz->title }}
            </div> -->
            <div class="quiz-result">
                <div class="quiz-result-progress" style="width: {{ $attempt->score }}%;"></div>
                <span></span>
            </div>
            <div class="share-section">
                Want to know which answers you got wrong? Share on either network below to unlock them!
                <div class="row">
                    <div class="col-md-6">
                        <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=I just completed the {{ $quiz->title }} and scored {{ $attempt->score }}%! See if you can beat my score. {{ url('/quiz/' . $quiz->slug) }}" class="share-facebook btn-main" target="_blank"> -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/quiz/' . $quiz->slug) }}" class="share-facebook btn-main" target="_blank">
                            <i class="fa fa-facebook"></i> Share To Facebook
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="https://www.twitter.com/intent/tweet?text={{ urlencode('I just completed the ' .  $quiz->title . ' and scored ' . $attempt->score . '%! See if you can beat my score. ') }}{{ url('/quiz/' . $quiz->slug) }}" class="share-twitter btn-main" target="_blank">
                            <i class="fa fa-twitter"></i> Share To Twitter
                        </a>
                    </div>
                </div>
            </div>
            <img src="{{ $quiz->image_s3 }}" class="img-fluid img-rounded mb-sm-30 quiz-image" alt="">
            <div class="quiz-headline">{{ $quiz->headline }}</div>
            <a href="{{ url('quiz/' . $quiz->slug) }}" class="btn-main quiz-retry">Try Quiz Again</a>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    @if ($attempt->score >= $quiz->min_score)
    var tracking_id = getCookie('tracking_id');
    if (tracking_id) {
        $.ajax({
            type: 'post',
            url: '/send-postback', // "{{ url('/send-postback') }}",
            data: { tracking_id: tracking_id },
            success: function(response) {
                console.log(response);
            },
            error: function(err) {
                console.log(err);
            }
        });
    }
    @endif

    localStorage.removeItem('current_quiz');

    $(document).ready(function() {
        var uuid = localStorage.getItem('uuid');
        var is_loggedin = {{ Auth::check() ? 1 : 0 }};
        var user_id = {{ Auth::check() ? Auth::user()->id : 0 }};
        var attempt_user_id = "{{ $attempt->user_id }}";
        var score = {{ $attempt->score }};

        if ((is_loggedin && attempt_user_id == user_id) || (!is_loggedin && attempt_user_id == uuid))
            $('.quiz-result-page .quiz-result span').html(`You got ${score}% of the questions right!`);
        else
            $('.quiz-result-page .quiz-result span').html(`They got ${score}% of the questions right!`);
    });
</script>
@endsection
