@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/multiselect/bootstrap-multiselect.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/filter.css') }}">
<style>
    .home-page .page-title {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 40px;
    }
</style>
@endsection

@section('content')
<section aria-label="section">
    <div class="home-page container">
        @include('user.component.filter')
        <div class="page-title">Latest Quizzes</div>
        <div class="row">
            <!-- nft item begin -->
            @foreach ($recent_quizzes as $quiz)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="nft__item quiz">
                    <div class="de_countdown is-countdown modified-countdown" title="Users Taking This Quiz">
                        <span aria-hidden="true" class="icon_group" style="margin-right:5px"></span>
                        <span class="quiz-taking-count">{{ $quiz->completions + $quiz->users_taking }}</span>
                    </div>
                    <div class="author_list_pp">
                        <a href="{{ url('author/' . $quiz->author->username) }}">
                            <img class="lazy" src="{{ $quiz->author->image_s3 }}" alt="">
                            <i class="fa fa-check"></i>
                        </a>
                    </div>
                    <div class="nft__item_wrap">
                        <a href="{{ url($quiz->public_link) }}" style="background-image: url('{{ $quiz->image_s3 }}');"></a>
                    </div>
                    <div class="quiz-meta">
                        @if ($quiz->completions == 0 || $quiz->average >= 80)
                        <span class="label label-success">Easy</span>
                        @elseif ($quiz->average >= 60)
                        <span class="label label-primary">Medium</span>
                        @else
                        <span class="label label-danger">Hard</span>
                        @endif
                        <span class="label label-default">{{ sizeof($quiz->questions) }} Questions</span>
                    </div>
                    <div class="nft__item_info">
                        <a href="{{ url($quiz->public_link) }}">
                            <h4>{{ $quiz->title }}</h4>
                        </a>
                        <div class="nft__item_price" style="font-weight: 400">
                            @foreach ($quiz->categories as $value)
                            <a href="{{ url('category/' . $value->slug) }}">#{{ $value->name }}</a>
                            @endforeach
                        </div>
                        <div class="nft__item_action" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="{{ htmlentities($quiz->headline) }}">
                            {{ htmlentities($quiz->headline) }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="page-title mt-4">Popular Quizzes</div>
        <div class="row">
            <!-- nft item begin -->
            @foreach ($popular_quizzes as $quiz)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="nft__item quiz">
                    <div class="de_countdown is-countdown modified-countdown" title="Users Taking This Quiz">
                        <span aria-hidden="true" class="icon_group" style="margin-right:5px"></span>
                        <span class="quiz-taking-count">{{ $quiz->completions + $quiz->users_taking }}</span>
                    </div>
                    <div class="author_list_pp">
                        <a href="{{ url('author/' . $quiz->author->username) }}">
                            <img class="lazy" src="{{ $quiz->author->image_s3 }}" alt="">
                            <i class="fa fa-check"></i>
                        </a>
                    </div>
                    <div class="nft__item_wrap">
                        <a href="{{ url($quiz->public_link) }}" style="background-image: url('{{ $quiz->image_s3 }}');"></a>
                    </div>
                    <div class="quiz-meta">
                        @if ($quiz->completions == 0 || $quiz->average >= 80)
                        <span class="label label-success">Easy</span>
                        @elseif ($quiz->average >= 60)
                        <span class="label label-primary">Medium</span>
                        @else
                        <span class="label label-danger">Hard</span>
                        @endif
                        <span class="label label-default">{{ sizeof($quiz->questions) }} Questions</span>
                    </div>
                    <div class="nft__item_info">
                        <a href="{{ url($quiz->public_link) }}">
                            <h4>{{ $quiz->title }}</h4>
                        </a>
                        <div class="nft__item_price" style="font-weight: 400">
                            @foreach ($quiz->categories as $value)
                            <a href="{{ url('category/' . $value->slug) }}">#{{ $value->name }}</a>
                            @endforeach
                        </div>
                        <div class="nft__item_action" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="{{ htmlentities($quiz->headline) }}">
                            {{ htmlentities($quiz->headline) }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('js/filter.js') }}"></script>
@endsection
