@extends('theme-default.layouts.master')

@section('title', 'Giới Thiệu')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.about'))
@section('fb_type', 'website')
@section('fb_title', 'Giới Thiệu')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
	<!-- Insert content here -->
    <h1>About Section</h1>
@endsection

@section('script')
    <!-- Insert script here -->
@endsection