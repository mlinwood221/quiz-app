@extends('layouts.app')

@section('css')
<style>
    .question-page {
        margin: 0 auto;
        max-width: 1000px;
    }
    .question-page .quiz-title {
        font-size: 32px;
        font-weight: 600;
        line-height: 48px;
        color: #333;
        margin-bottom: 40px;
    }
    .question-page .quiz-route {
        margin-bottom: 40px;
    }
    .question-page .quiz-route a {
        color: #727272;
        text-decoration: underline;
    }    
    .question-page .question-fact {
        align-items: center;
        background: #fff2ab;
        border-radius: 5px;
        font-size: 16px;
        padding: 16px 40px 14px 40px;
        text-align: center;
        margin-bottom: 15px;
    }
    .question-page .quiz-progressbar {
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
    .question-page .quiz-progressbar span {
        position: relative;
        color: white;
    }
    .question-page .quiz-progressbar .quiz-current-progress {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        background: var(--secondary-color);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    .question-page .quiz-image {
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        margin-bottom: 20px;
        width: 100%;
    }
    .question-page .quiz-question {
        padding: 12px 10px 10px 13px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        background-color: #a4a4a4;
        color: white;
    }
    .question-page .quiz-headline {
        margin-bottom: 20px;
    }
    .question-page .share-facebook {
        width: 100%;
        display: block;
        background: #3b5998;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .question-page .share-twitter {
        width: 100%;
        display: block;
        background: #1da1f2;
        border-radius: 5px;
    }
    .question-page .choice-group {
        margin-top: 20px;
    }
    .question-page .choice-group > button { 
        width: 100%;
        border-radius: 5px;
        background: #dbdbdb;
        color: #333;
        font-weight: 500;
        margin-bottom: 15px;
        box-shadow: 2px 2px 9px rgb(0 0 0 / 10%);
    }
    .question-page .choice-group > button:hover {
        background: var(--secondary-color);
        color: white;
        box-shadow: 2px 2px 20px 0px rgba(var(--secondary-color-rgb), 0.5);
    }
    @media screen and (min-width: 577px) {
        .question-page .choice-group > button {
            width: calc((100% - 30px) / 2)
        }
        .question-page .choice-group > button:nth-of-type(odd) {
            margin-right: 15px;
        }
        .question-page .choice-group > button:nth-of-type(even) {
            margin-left: 15px;
        }
    }
    @media screen and (max-width: 576px) {
        .question-page .row > div:nth-child(2) {
            margin-top: 30px;
        }
    }
</style>
@endsection

@section('content')

<section aria-label="section" class="sm-mt-0">
    <div class="container">
        <div class="question-page">
            <div class="quiz-title">{{ $quiz->title }}</div>
            <!-- <div class="quiz-route">
                <a href="{{ url('/') }}">Home</a> / Quiz / {{ $quiz->title }}
            </div> -->
            @if ($question->fact)
            <div class="question-fact">{{ $question->fact }}</div>
            @endif
            @foreach ($html_sections as $html_section)
                @if ($html_section->name == 'QUIZ_QUESTION_PROGRESS')
                <?php echo $html_section->html; ?>
                @endif
            @endforeach
            <div class="quiz-progressbar">
                <div class="quiz-current-progress" style="width: {{ $qNo / $qTotal * 100 }}%;"></div>
                <span>Question {{ $qNo }} / {{ $qTotal }}</span>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="quiz-question">{{ $question->question }}</div>
                    <img src="{{ $question->image_s3 }}" class="img-fluid img-rounded mb-sm-30 quiz-image" alt="">
                    @foreach ($html_sections as $html_section)
                        @if ($html_section->name == 'QUIZ_QUESTION_IMAGE')
                        <?php echo $html_section->html; ?>
                        @endif
                    @endforeach
                    <div class="choice-group"></div>
                </div>
                <div class="col-md-4">
                    <div class="quiz-headline">{{ $quiz->headline }}</div>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/quiz/' . $quiz->slug) }}" class="share-facebook btn-main">
                        <i class="fa fa-facebook"></i> Share To Facebook
                    </a>
                    <a href="twitter.com/intent/tweet?text={{ url('/quiz/' . $quiz->slug) }}" class="share-twitter btn-main">
                        <i class="fa fa-twitter"></i> Share To Twitter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    var qNo = {{ $qNo }};
    var quiz_slug = "{{ $quiz->slug }}";
    var qUID = "{{ $question->uid }}";

    var choices = [];
    
    @php
    $choices = explode(',', $question->choices);
    foreach ($choices as $choice) {
    @endphp
        choices.push(`{{ $choice }}`);
    @php } @endphp

    $(document).ready(function() {
        choices.map((value, index) => {
            setTimeout(() => {
                $('.question-page .choice-group').append(`<button class="btn-main choice-item" onclick='onSelectAnswer("${value}")')>${value}</button>`);
            }, 500 * index);
        });
        
        var current_quiz = JSON.parse(localStorage.getItem('current_quiz'));
        if (!current_quiz || !current_quiz['slug']) {
            window.location.href = `${site_url}/quiz/${quiz_slug}`;
            return;
        } else {
            if (quiz_slug == current_quiz['slug'] && current_quiz['qUID'] != qUID) {
                window.location.href = `${site_url}/quiz/${quiz_slug}/question/${current_quiz['qUID']}`;
                return;
            }
        }
    });

    function onSelectAnswer(value) 
    {
        goNextQuestion(qUID, value);
    }
    
    function goNextQuestion(qUID, value)   // if qUID is null, it redirects to first question of quiz
    {
        var current_quiz = JSON.parse(localStorage.getItem('current_quiz'));

        $.ajax({
            type: 'post',
            url: '../next-question', // `${site_url}/quiz/${quiz_slug}/next-question`,
            data: { qUID: qUID, value: value, attempt_uid: current_quiz['attempt_uid'], ads_loaded: quizzlyBearsAdsLoaded },
            success: function(res) {
                var res = JSON.parse(res);
                if (res['result'] == 'success') {
                    if (res['qUID'] == 'end') {
                        window.location.href = `${site_url}/quiz/${quiz_slug}/result/${current_quiz['attempt_uid']}`;
                    } else {
                        // Update current quiz slug and uid in localStorage
                        current_quiz['qUID'] = res['qUID'];
                        localStorage.setItem('current_quiz', JSON.stringify(current_quiz));
                        // Redirect to next question
                        window.location.href = `${site_url}/quiz/${quiz_slug}/question/${res['qUID']}`;
                    }
                } else {
                    console.log(res['reason']);
                }
            },
            error: function(err) {
                console.log(err);
            }
        })
    }
</script>
@endsection