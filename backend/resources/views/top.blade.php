@extends('layouts.layout')

@section('title', 'ShareMyLearning')

@section('scripts')

@endsection

@section('content')
<div class="toppage-wrapper">
    <div class="toppage-main-wrapper">
        <div class="toppage-head-wrapper">
            <h1 class="toppage-head bold">ShareMyLearning</h1>
            <h3 class="toppage-sub-head">積み重ねの記録を残そう</h3>
        </div>
        <div class="toppage-images-wrapper">
            <!-- 完成後の画像を3枚程度並べる -->
            <div class="image-content">
                <div class="image-container">
                    <img class="main-img" src="{{ asset('/app-images/main1.jpg') }}" alt="">
                    <img class="main-img" src="{{ asset('/app-images/image2.png') }}" alt="">
                    <img class="main-img" src="{{ asset('/app-images/graph3.png') }}" alt="">
                </div>
                <div class="image-text-container">
                    <p class="image-introduction bold">毎日の学習を投稿しよう</p>
                    <p class="image-introduction bold">わからない所はチャットで質問できる</p>
                    <p class="image-introduction bold">学習時間に応じてランクアップ！</p>
                </div>
            </div>
        </div>
        <div class="toppage-register-wrapper">
            <a href="{{ route('register') }}" class="btn-register bold">新規登録</a>
        </div>
    </div>
</div>
@endsection