@extends('layouts.app')

@section('css')
<style>    
    .blog-list-page {
        max-width: 1000px;
        margin: 0 auto;
        padding: 80px 0px;
    }
    .blog-list-page a {
        text-decoration: underline;
    }
    .blog-list-page .page-title {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 60px;
    }
    .blog-list-page .blog-wrapper {
        margin-bottom: 40px;
    }
    .blog-list-page .blog-wrapper .blog-image {
        width: 100%;
    }
    .blog-list-page .blog-wrapper .blog-title {
        color: #333;
        font-weight: 600;
        margin-bottom: 10px;
        text-decoration: underline;
    }
    .blog-list-page .blog-wrapper .blog-headline {
        font-size: 14px;
        line-height: 18px;
        margin-bottom: 15px;
    }
    .blog-list-page .blog-wrapper .blog-date {
        background: var(--secondary-color);
        padding: 0px 10px;
        color: white;
        font-size: 12px;
        line-height: 20px;
        width: fit-content;
        border-radius: 5px;
    }
    @media screen and (max-width: 767px) {
        .blog-list-page .blog-wrapper .row > div:nth-child(2) {
            margin-top: 20px;
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="blog-list-page">
        <div class="page-title">Blogs</div>
        @if (sizeof($blogs) == 0)
        <p>No blogs added yet.</p>
        @endif
        @foreach ($blogs as $blog)
        <div class="nft__item blog-wrapper">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <img class="blog-image" src="{{ $blog->image_s3 }}" />
                </div>
                <div class="col-md-8 col-lg-9">
                    <a href="{{ url('blog/' . $blog->slug) }}"><p class="blog-title">{{ $blog->title }}</p></a>
                    <p class="blog-headline">{{ $blog->headline }}</p>
                    <p class="blog-date">Posted on {{ date_format(date_create($blog->created_at), 'M d, Y') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('js')
@endsection