<?php
// dd($land);
?>
@extends('theme-default.layouts.master')

@section('title', $land->name)
@section('description', $land->description)

@section('fb_url', route('frontend.pages.land-detail', ['slug'=>$land->slug, 'id'=>$land->id]))
@section('fb_type', 'website')
@section('fb_title', $land->name)
@section('fb_des', $land->description)
@section('fb_img', Voyager::image($land->image))

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url({{ Voyager::image(setting('ban-bds.banner')) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">{{ $land->name }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
@include('theme-default.partials.search')
<!-- ##### Advance Search Area End ##### -->

<!-- ##### Listings Content Area Start ##### -->
<section class="listings-content-wrapper section-padding-50">
    <div class="container">
        @php
            $galleries = json_decode($land->galleries);
        @endphp
        @if($galleries)
        <div class="row">
            <div class="col-12">
                <!-- Single Listings Slides -->
                <div class="single-listings-sliders owl-carousel">
                    @foreach($galleries as $v)
                    <!-- Single Slide -->
                    <img src="{{ Voyager::image($v) }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="listings-content">
                    <!-- Price -->
                    <div class="list-price">
                        <p>{{ $land->price }}</p>
                    </div>
                    <h5>{{ $land->name }}</h5>
                    <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">{{ $land->address }}</p>

                    {!! $land->body !!}
                    
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact-realtor-wrapper">
                    <div class="realtor-info">
                        <div class="realtor---info">
                            <h2>Liên hệ</h2>
                            <p>Thông tin liên hệ</p>
                            <h6><img src="{{ asset('assets/img/icons/phone-call.png') }}" alt=""> {{ setting('lien-he.phone') }}</h6>
                            <h6><img src="{{ asset('assets/img/icons/envelope.png') }}" alt=""> {{ setting('lien-he.email') }}</h6>
                        </div>
                        <div class="realtor--contact-form">
                            <form action="{{ route('store.thienpham.contact') }}" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="realtor-name" name="name" placeholder="Họ tên" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="realtor-number" name="phone" placeholder="Điện thoại" required>
                                </div>
                                <div class="form-group">
                                    <input type="enumber" class="form-control" id="realtor-email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="Nội dung" name="message" required></textarea>
                                </div>
                                <button type="submit" class="btn south-btn">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Listing Maps -->
        <div class="row">
            <div class="col-12">
                <div class="listings-maps mt-0">
                    {!! $land->google_map !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Listings Content Area End ##### -->


@endsection

@section('script')
    <!-- Insert script here -->
@endsection