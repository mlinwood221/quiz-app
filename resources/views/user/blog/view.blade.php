@extends('layouts.app')

@section('css')
<style>    
    .blog-view-page {
        max-width: 1000px;
        margin: 0 auto;
        padding: 80px 0px;
    }
    .blog-view-page .blog-title {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
    }
    .blog-view-page .blog-route {
        margin-bottom: 40px;
    }
    .blog-view-page .blog-route a {
        color: #727272;
        text-decoration: underline;
    }
    .blog-view-page .blog-image {
        width: 100%;
        margin-bottom: 20px;
    }
    .blog-view-page .blog-description {
        font-size: 14px;
        line-height: 20px;
    }
    .blog-view-page h3 {
        color: #555;
        margin-bottom: 15px;
    }
    .blog-view-page .latest-blog-wrapper {
        margin-bottom: 20px;
    }
    .blog-view-page .latest-blog-wrapper .blog-image {
        width: 100%;
        margin-bottom: 10px;
    }
    .blog-view-page .latest-blog-wrapper .blog-title {
        font-size: 16px;
        line-height: 24px;
        color: #555;
        font-weight: 600;
        margin-bottom: 10px;
        text-decoration: underline;
    }
    .blog-view-page .latest-blog-wrapper .blog-headline {
        font-size: 14px;
        line-height: 18px;
        margin-bottom: 15px;
    }
    .blog-view-page .latest-blog-wrapper .blog-date {
        background: var(--secondary-color);
        padding: 0px 10px;
        color: white;
        font-size: 12px;
        line-height: 20px;
        width: fit-content;
        border-radius: 5px;
    }
    @media screen and (max-width: 767px) {
        .blog-view-page .latest-blog-wrapper .row > div:nth-child(2) {
            margin-top: 20px;
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="blog-view-page">
        <div class="blog-title">{{ $blog->title }}</div>
        <div class="blog-route">
            <a href="{{ url('/') }}">Home</a> / <a href="{{ url('/blog') }}">Blog</a> / {{ $blog->title }}
        </div>
        <div class="row">
            <div class="col-md-8">
                <img class="blog-image" src="{{ $blog->image_s3 }}" />
                <div class="blog-description"><?php echo $blog->description; ?></div>
            </div>
            <div class="col-md-4">
                <h3>Latest Blogs</h3>
                @if (sizeof($latest_blogs) == 0)
                <p>No blogs added yet.</p>
                @endif
                @foreach ($latest_blogs as $index=>$value)
                    @if ($blog->id != $value->id)
                    <div class="nft__item latest-blog-wrapper">
                        <img class="blog-image" src="{{ $value->image_s3 }}" />
                        <a href="{{ url('blog/' . $value->slug) }}"><p class="blog-title">{{ $value->title }}</p></a>
                        <p class="blog-headline">{{ $value->headline }}</p>
                        <p class="blog-date">Posted on {{ date_format(date_create($value->created_at), 'M d, Y') }}</p>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
