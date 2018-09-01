<?php
// dd($land);
?>
@extends('theme-default.layouts.master')

@section('title', $page->title)
@section('description', $page->excerpt)

@section('fb_url', route('frontend.pages.thietKeNoiThat'))
@section('fb_type', 'website')
@section('fb_title', $page->title)
@section('fb_des', $page->excerpt)
@section('fb_img', Voyager::image($page->image))

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url({{ Voyager::image($page->image) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Thiết kế nội thất</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="single-blog-area">
                    <!-- Post Content -->
                    <div class="post-content">
                        <!-- Headline -->
                        <a href="#" class="headline">{{ $page->title }}</a>
                        {!! $page->body !!}
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                @include('theme-default.partials.sidebar')
            </div>
            
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->

@endsection

@section('script')
    <!-- Insert script here -->
@endsection