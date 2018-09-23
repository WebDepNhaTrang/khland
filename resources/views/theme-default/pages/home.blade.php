@extends('theme-default.layouts.master')

@section('title', 'Trang Chủ')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.home') )
@section('fb_type', 'website')
@section('fb_title', 'Trang Chủ')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<!-- ##### Hero Area Start ##### -->
@php
    $banners = getAllBanners('*', 'created_at', 'desc');
@endphp
@if( $banners->count() > 0 )
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        @foreach($banners as $v)
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url({{ Voyager::image($v->image) }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">{{ $v->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif
<!-- ##### Hero Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
@include('theme-default.partials.search')
<!-- ##### Advance Search Area End ##### -->

<!-- ##### Featured Properties Area Start ##### -->
<section class="featured-properties-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp">
                    <h2>{{ setting('trang-chu.bds_st_title') }}</h2>
                    <p>{{ setting('trang-chu.bds_st_des') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
        <!-- BĐS bán -->
        @php
            $land_buy = getAllLands('buy', '*', 'created_at', 'desc', 3);
        @endphp
        @if($land_buy->count()>0)
            @foreach($land_buy as $v)
            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
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
            </div>
            @endforeach
        @endif

        <!-- BĐS cho thuê -->
        @php
            $land_rent = getAllLands('rent', '*', 'created_at', 'desc', 3);
        @endphp
        @if($land_rent->count()>0)
            @foreach($land_rent as $v)
            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="{{ route('frontend.pages.land-detail', ['slug'=>$v->slug, 'id'=>$v->id]) }}">
                            <img src="{{ Voyager::image($v->image) }}" alt="{{ $v->name }}">
                        </a>
                        

                        <div class="tag">
                            <span>Cho thuê</span>
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
            </div>
            @endforeach
        @endif
        </div>
    </div>
</section>
<!-- ##### Featured Properties Area End ##### -->

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

<!-- ##### Editor Area Start ##### -->
<!-- <section class="south-editor-area d-flex align-items-center">
    <div class="editor-content-area">
        <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
            <img src="{{ asset('assets/img/icons/prize.png') }}" alt="">
            <h2>jeremy Scott</h2>
            <p>Realtor</p>
        </div>
        <p class="wow fadeInUp" data-wow-delay="500ms">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
        <div class="address wow fadeInUp" data-wow-delay="750ms">
            <h6><img src="{{ asset('assets/img/icons/phone-call.png') }}" alt=""> +45 677 8993000 223</h6>
            <h6><img src="{{ asset('assets/img/icons/envelope.png') }}" alt=""> office@template.com</h6>
        </div>
        <div class="signature mt-50 wow fadeInUp" data-wow-delay="1000ms">
            <img src="{{ asset('assets/img/core-img/signature.png') }}" alt="">
        </div>
    </div>
    <div class="editor-thumbnail">
        <img src="{{ asset('assets/img/bg-img/editor.jpg') }}" alt="">
    </div>
</section> -->
<!-- ##### Editor Area End ##### -->
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
    
