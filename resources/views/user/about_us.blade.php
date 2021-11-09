@extends('layouts.app')

@section('css')
<style>
    .about-us-page {
        max-width: 1000px;
        margin: 0 auto;
        padding: 80px 0px;
    }
    .about-us-page a {
        text-decoration: underline;
    }
    .about-us-page .page-title {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 60px;
    }
    .about-us-page .page-image {
        margin-bottom: 40px;
    }
    .about-us-page .page-image img {
        width: 100%;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="about-us-page">
        <div class="page-title">About Us</div>
        <div class="page-image">
            <img src="{{ asset('images/about-us.png') }}" />
        </div>
        <p>First of all, we would like to take this opportunity to thank you for taking an interest in our quiz site and welcome you as the latest Quizzly Bear!</p>
        <p>QuizzlyBears is operated by four individuals that all share a passion for quizzing. We all started quizzing around five years ago and all met each other on the quiz site that we were using at the time, thanks to the social features available on that particular quiz site. Unfortunately things started to go in a different direction to what we had initially fallen in love with, and it seemed like the right time to move on. We spent the next few months trying out alternatives but nothing really grasped our enthusiasm for quizzing in the same way as the site we were originally using had done.</p>
        <p>We made the decision to stop looking for an alternative, and instead attempt to create our own version of exactly what we were looking for. We wanted a place where we could chill out after work, socialize, test our knowledge on fun new quizzes, compete with each other and potentially make new friends. Due to a combined web-design knowledge of zero between the four of us, the idea to build a quiz website didn't get too much further than an idea. Instead we opted to build a quiz forum, where we would create quizzes for each other to complete whilst still having the ability to socialize with each other thanks to the social abilities that come with a forum. We had friends and family joining the forum and starting to show an interest in our quizzes, and after a while, the general public was starting to visit and register to our forum as well. We ran that forum for two years and towards the end, we had in excess of 72,000 registered members.</p>
        <p>With such a large increase of active users, we had started to outgrow the forum. Being a forum, our abilities to cater to so many people were very limited and so we felt the need to make a change. So here we are today, on our new website, thanks to the help of a friend who helped build us this website.</p>
        <p>We have an inventory of quizzes spanning across many different verticals including Celebrities, Movies, TV, Games, Sports and so much more. We are constantly adding new quizzes to QuizzlyBears and are open to suggestions so please feel free to <a href="{{ url('/contact-us') }}">contact us</a> if you have an awesome quiz idea that you would like us to implement.</p>
        <p>Our quizzes aren't just available on PC, but all mobile devices too, no matter where in the World you are! We plan to release a QuizzlyBears app for Android, iOS and Facebook in the near future. We will not stop improving, even when QuizzlyBears is considered the most awesome quiz website on the planet. Exciting times ahead indeed.</p>
        <p>The QuizzlyBears website was created on 6th January 2020, by a team of like-minded people that share a passion for quizzes. The first quiz added to QuizzlyBears was for the popular game called Fortnite, which we're sure you have probably heard of, or possibly even played yourself at some point. This <a href="{{ url('/quiz/fortnite-quiz') }}">Fortnite quiz</a> is still active on our website to this day, so feel free to check it out if it's something of interest to you.</p>
    </div>
</div>
@endsection

@section('js')
@endsection