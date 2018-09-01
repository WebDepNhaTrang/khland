@extends('theme-default.layouts.master')

@section('title', 'Liên Hệ')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.contact'))
@section('fb_type', 'website')
@section('fb_title', 'Liên Hệ')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url({{ Voyager::image(setting('lien-he.banner')) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Liên Hệ</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<section class="south-contact-area section-padding-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-heading">
                    <h6>Thông tin liên hệ</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="content-sidebar">
                    <!-- Address -->
                    <div class="address">
                        <h6><img src="{{ asset('assets/img/icons/phone-call.png') }}" alt=""> {{ setting('lien-he.phone') }}</h6>
                        <h6><img src="{{ asset('assets/img/icons/envelope.png') }}" alt=""> {{ setting('lien-he.email') }}</h6>
                        <h6><img src="{{ asset('assets/img/icons/location.png') }}" alt=""> {{ setting('lien-he.address') }}</h6>
                    </div>
                </div>
            </div>

            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8">
                <div class="contact-form">
                    @if(Session::has('success'))
                        <div class="cf-msg">
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('store.thienpham.contact') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="contact-name" placeholder="Họ tên" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" id="contact-number" placeholder="Điện thoại">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="contact-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                        </div>
                        <button type="submit" class="btn south-btn">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps -->
<div class="map-area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {!! setting('lien-he.google_map') !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- Insert script here -->
@endsection