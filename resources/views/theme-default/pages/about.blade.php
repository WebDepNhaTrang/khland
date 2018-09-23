@extends('theme-default.layouts.master')

@section('title', 'Giới Thiệu')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.about'))
@section('fb_type', 'website')
@section('fb_title', 'Giới Thiệu')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url({{ Voyager::image(setting('gioi-thieu.banner')) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Giới Thiệu</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
@include('theme-default.partials.search')
<!-- ##### Advance Search Area End ##### -->

<!-- ##### About Content Wrapper Start ##### -->
<section class="about-content-wrapper section-padding-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                    <h2>{{ setting('gioi-thieu.title') }}</h2>
                    {!! setting('gioi-thieu.description') !!}
                </div>
                <div class="about-content">
                    <img class="wow fadeInUp" data-wow-delay="350ms" src="{{ Voyager::image(setting('gioi-thieu.image')) }}" alt="">
                    <div class="wow fadeInUp" data-wow-delay="450ms">

                    </div>
                    {!! setting('gioi-thieu.body') !!}
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                    <h2>BĐS NỘI BẬT</h2>
                </div>
                <!-- BĐS bán -->
                @php
                    $land_buy = getAllLands('buy', '*', 'created_at', 'desc', 3);
                @endphp
                @if($land_buy->count()>0)
                    
                <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">
                    @foreach($land_buy as $v)
                        <!-- Single Featured Property -->
                            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    <a href="{{ route('frontend.pages.land-detail', ['slug'=>$v->slug, 'id'=>$v->id]) }}">
                                        <img src="{{ Voyager::image($v->image) }}" alt="{{ $v->name }}">
                                    </a>
                                    <div class="tag">
                                        <span>Bán</span>
                                    </div>
                                    <div class="list-price">
                                        <p>{{ $v->price }}</p>
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <a href="{{ route('frontend.pages.land-detail', ['slug'=>$v->slug, 'id'=>$v->id]) }}">
                                        <h5>{{ $v->name }}</h5>
                                    </a>
                                    <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">{{ $v->address }}</p>
                                    <p class="excerpt">{{ shorten_text($v->description, 170, '...', true) }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Content Wrapper End ##### -->

<!-- ##### Call To Action Area Start ##### -->
<section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url({{ Voyager::image(setting('gioi-thieu.qc_st_bg')) }})">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12">
                <div class="cta-content text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="300ms">{{ setting('gioi-thieu.qc_st_title') }}</h2>
                    <h6 class="wow fadeInUp" data-wow-delay="400ms">{{ setting('gioi-thieu.qc_st_des') }}</h6>
                    <a href="{{ setting('gioi-thieu.qc_st_link_btn') }}" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">{{ setting('gioi-thieu.qc_st_text_btn') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action Area End ##### -->

<!-- ##### Meet The Team Area Start ##### -->
<section class="meet-the-team-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>{{ setting('gioi-thieu.noithat_st_title') }}</h2>
                    <p>{{ setting('gioi-thieu.noithat_st_des') }}</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb">
                        <img src="{{ Voyager::image(setting('gioi-thieu.noithat_st_tknt_img')) }}" alt="">
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info">
                        <div class="section-heading">
                            <img src="{{ asset('assets/img/icons/prize.png') }}" alt="">
                            <h2>Thiết Kế Nội Thất</h2>
                            <a href="#">
                                <p>Xem chi tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb">
                        <img src="{{ Voyager::image(setting('gioi-thieu.noithat_st_tcnt_img')) }}" alt="">
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info">
                        <div class="section-heading">
                            <img src="{{ asset('assets/img/icons/prize.png') }}" alt="">
                            <h2>Thi Công Nội Thất</h2>
                            <a href="#">
                                <p>Xem chi tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Meet The Team Area End ##### -->
@endsection

@section('script')
    <!-- Insert script here -->
@endsection