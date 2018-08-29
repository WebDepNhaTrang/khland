@extends('theme-default.layouts.master')

@section('title', 'Liên Hệ')
@section('description', '')

@section('fb_url', route('frontend.pages.contact'))
@section('fb_type', 'website')
@section('fb_title', 'Liên Hệ')
@section('fb_des', '')
@section('fb_img', '')

@section('content')
	<!-- Insert content here -->
    <h1>Liên Hệ Section</h1>
    @if(Session::has('success'))
        <div class="cf-msg">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
        
    <form action="{{ route('store.thienpham.contact') }}" method="post">
        @csrf
        <div class="row">
            <div>
                <input type="text" placeholder="Họ tên" name="fullname" required>
            </div>
            <div>
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div>
                <input type="text" placeholder="Địa Chỉ" name="address" required>
            </div>
            <div>
                <input type="text" placeholder="Điện Thoại" name="phone" required>
            </div>
            <div>
                <input type="text" placeholder="Chủ Đề" name="subject" required>
            </div>
            <div>
                <textarea placeholder="Nội Dung" name="msg" required></textarea>
            </div>
            <div>
                <button id="submit" name="submit">Gửi</button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <!-- Insert script here -->
@endsection