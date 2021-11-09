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
        margin-bottom: 40px;
    }
    .quiz-page .quiz-route {
        margin-bottom: 40px;
    }
    .quiz-page .quiz-route a {
        color: #727272;
        text-decoration: underline;
    }
    .quiz-page .quiz-completions {
        background: var(--secondary-color);
        color: white;
        padding: 10px 30px;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align: center;
    }
    .quiz-page .quiz-image {
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        margin-bottom: 10px;
        width: 100%;
    }
    .quiz-page .quiz-headline {
        margin-top: 15px;
        padding: 12px 10px 10px 13px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        background-color: #a4a4a4;
        color: white;
    }
    .quiz-page .quiz-description {
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .quiz-page .quiz-start {
        width: 100%;
        margin-top: 20px;
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
            <div class="quiz-completions">
                Difficulty: 
                @if ($quiz->completions == 0 || $quiz->average >= 80)
                <b>Easy</b>
                @elseif ($quiz->average >= 60)
                <b>Medium</b>
                @else
                <b>Hard</b>
                @endif
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avg Score: <b>{{ $quiz->average }}</b>%
            </div>
            @foreach ($html_sections as $html_section)
                @if ($html_section->name == 'QUIZ_START_HEADLINE')
                <?php echo $html_section->html; ?>
                @endif
            @endforeach
            <div class="quiz-headline">{{ $quiz->headline }}</div>
            <img src="{{ $quiz->image_s3 }}" class="img-fluid img-rounded mb-sm-30 quiz-image" alt="">
            @foreach ($html_sections as $html_section)
                @if ($html_section->name == 'QUIZ_START_IMAGE')
                <?php echo $html_section->html; ?>
                @endif
            @endforeach
            <div class="quiz-description"><?php echo $quiz->description; ?></div>
            @foreach ($html_sections as $html_section)
                @if ($html_section->name == 'QUIZ_START_BUTTON')
                <?php echo $html_section->html; ?>
                @endif
            @endforeach
            <button class="quiz-start btn-main" onclick="onStartQuiz()">Start Quiz</button>
        </div>
    </div>
</section>


<div class="modal fade" id="modal-disable-adblocker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Action Required!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                In order to start a quiz, please disable your adblocker and try again.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var quiz_slug = "{{ $quiz->slug }}";

    $(document).ready(function() {
        var current_quiz = JSON.parse(localStorage.getItem('current_quiz'));
        if (current_quiz && current_quiz['slug'] == quiz_slug && current_quiz['qUID']) {
            window.location.href = `${site_url}/quiz/${quiz_slug}/question/${current_quiz['qUID']}`;
        }
    });

    function onStartQuiz()
    {
        if (quizzlyBearsAdsLoaded === 0) {
            $('#modal-disable-adblocker').modal('show');
            return;
        }

        $.ajax({
            type: 'post',
            url: `${quiz_slug}/start`, // `${site_url}/quiz/${quiz_slug}/start`,
            data: { uuid: localStorage.getItem('uuid') },
            success: function(res) {
                var res = JSON.parse(res);
                if (res['result'] == 'success') {
                    var current_quiz = {};
                    current_quiz['slug'] = quiz_slug;
                    current_quiz['qUID'] = res['qUID'];
                    current_quiz['attempt_uid'] = res['attempt_uid'];
                    localStorage.setItem('current_quiz', JSON.stringify(current_quiz));
                    window.location.href = `${site_url}/quiz/${quiz_slug}/question/${res['qUID']}`;
                } else {
                    if (res['reason'] == 'no question') {
                        window.location.href = `${site_url}/quiz/${quiz_slug}/no-question`;
                    } else {
                        console.log(res);
                    }
                }
            }
        });
    }
</script>

@endsection
