@extends('layouts.app')

@section('css')
<style>
    .wordsearch-page {
        margin: 0 auto;
        max-width: 1000px;
    }
    .wordsearch-page .quiz-title {
        font-size: 32px;
        font-weight: 600;
        line-height: 48px;
        color: #333;
        margin-bottom: 40px;
    }
    .wordsearch-page .quiz-route {
        margin-bottom: 40px;
    }
    .wordsearch-page .quiz-route a {
        color: #727272;
        text-decoration: underline;
    }
    .wordsearch-page .quiz-image {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .wordsearch-page .quiz-headline {
        margin-bottom: 20px;
    }
    .wordsearch-page #word-search {
        /* margin-top: 20px; */
    }
    .wordsearch-page #word-search #word-search-questions {
        margin-bottom: 20px;
    }
    .wordsearch-page .share-facebook {
        width: 100%;
        display: block;
        background: #3b5998;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .wordsearch-page .share-twitter {
        width: 100%;
        display: block;
        background: #1da1f2;
        border-radius: 5px;
    }
    @media screen and (max-width: 576px) {
        .wordsearch-page .row > div:nth-child(2) {
            margin-top: 30px;
        }
    }
</style>
<link rel="stylesheet" href="{{ asset('css/wordsearch.css') }}">
@endsection

@section('content')
<section aria-label="section" class="sm-mt-0">
    <div class="container">
        <div class="wordsearch-page">
            <div class="quiz-title">{{ $quiz->title }}</div>
            <!-- <div class="quiz-route">
                <a href="{{ url('/') }}">Home</a> / Quiz / {{ $quiz->title }}
            </div> -->
            <div class="row">
                <div class="col-md-8">
                    @foreach ($html_sections as $html_section)
                        @if ($html_section->name == 'WORDSEARCH_ABOVE')
                        <?php echo $html_section->html; ?>
                        @endif
                    @endforeach
                    @php
                        $answers = array();
                        foreach ($quiz->questions as $question) {
                            array_push($answers, $question->answer);
                        }

                        $wordsearch = WordSearch\Factory::create($answers);
                        $transformer = new WordSearch\Transformer\HtmlTransformer($wordsearch);
                    @endphp
                    <div id="word-search">
                        <div id="word-search-grid">
                            <div id="word-search-overlay">
                                <button>Start</button>
                            </div>
                            <div id="word-search-heading">
                                <div id="word-search-timer">
                                    <i class="far fa-clock"></i>
                                    <span id="word-search-remaining">10:00</span>
                                </div>
                                <div id="word-search-floating">
                                    <div id="word-search-stage"><span id="word-search-completed">0</span> / <?php print sizeof( $quiz->questions ); ?> answered</div>
                                    <button>Submit</button>
                                </div>
                            </div>

                            <?php print $transformer->grid( ); ?>
                        </div>
                        
                        <div id="word-search-questions"></div>
                    </div>
                    @foreach ($html_sections as $html_section)
                        @if ($html_section->name == 'WORDSEARCH_BELOW')
                        <?php echo $html_section->html; ?>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4">
                    <img class="quiz-image" src="{{ $quiz->image_s3}}" />
                    <div class="quiz-headline">{{ $quiz->headline }}</div>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/wordsearch/' . $quiz->slug) }}" class="share-facebook btn-main">
                        <i class="fa fa-facebook"></i> Share To Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ url('/wordsearch/' . $quiz->slug) }}" class="share-twitter btn-main">
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
    var site_url = "{{ url('') }}" + "/";
    var quiz_id = "{{ $quiz->id }}";
    var quiz_title = "{{ $quiz->title }}";
    var quiz_slug = "{{ $quiz->slug }}";
</script>
<script src="{{ asset('js/wordsearch.js?v=2') }}"></script>
@endsection