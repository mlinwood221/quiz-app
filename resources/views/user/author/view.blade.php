@extends('layouts.app')

@section('css')
<style>
    .author-page .section-heading {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }
    .d_profile {
        justify-content: center;
        margin-bottom: 60px;
    }
</style>
@endsection

@section('content')
<section class="author-page" aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d_profile de-flex">
                    <div class="de-flex-col">
                        <div class="profile_avatar">
                            <img src="{{ $author->image_s3 }}" alt="">
                            <i class="fa fa-check"></i>
                            <div class="profile_name">
                                <h4>
                                    {{ ucfirst($author->firstname) . ' ' . ucfirst($author->lastname) }}
                                    <span class="profile_username">@ {{ $author->username }}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-heading">Quizzes by the Author</div>

            <div class="col-md-12">
                <div class="row justify-content-center">
                    @foreach ($author->quizzes as $quiz)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item quiz">
                            <div class="de_countdown is-countdown modified-countdown" title="Users Taking This Quiz">
                                <span aria-hidden="true" class="icon_group" style="margin-right:5px"></span>
                                <span class="quiz-taking-count">100</span>
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
        </div>
    </div>
</section>
@endsection

@section('js')
@endsection