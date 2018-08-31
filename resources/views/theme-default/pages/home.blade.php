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
                    <h2>Featured Properties</h2>
                    <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <img src="{{ asset('assets/img/bg-img/feature1.jpg') }}" alt="">

                        <div class="tag">
                            <span>For Sale</span>
                        </div>
                        <div class="list-price">
                            <p>$945 679</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <h5>Villa in Los Angeles</h5>
                        <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                            <div class="new-tag">
                                <img src="{{ asset('assets/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('assets/img/icons/bathtub.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="{{ asset('assets/img/icons/garage.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('assets/img/icons/space.png') }}" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <img src="{{ asset('assets/img/bg-img/feature2.jpg') }}" alt="">

                        <div class="tag">
                            <span>For Sale</span>
                        </div>
                        <div class="list-price">
                            <p>$945 679</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <h5>Town House in Los Angeles</h5>
                        <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                            <div class="new-tag">
                                <img src="{{ asset('assets/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('assets/img/icons/bathtub.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="{{ asset('assets/img/icons/garage.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('assets/img/icons/space.png') }}" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <img src="{{ asset('assets/img/bg-img/feature3.jpg') }}" alt="">

                        <div class="tag">
                            <span>For Sale</span>
                        </div>
                        <div class="list-price">
                            <p>$945 679</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <h5>Town House in Los Angeles</h5>
                        <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                            <div class="new-tag">
                                <img src="{{ asset('assets/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('assets/img/icons/bathtub.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="{{ asset('assets/img/icons/garage.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('assets/img/icons/space.png') }}" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="400ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <img src="{{ asset('assets/img/bg-img/feature4.jpg') }}" alt="">

                        <div class="tag">
                            <span>For Sale</span>
                        </div>
                        <div class="list-price">
                            <p>$945 679</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <h5>Villa in Los Angeles</h5>
                        <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                            <div class="new-tag">
                                <img src="{{ asset('assets/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('assets/img/icons/bathtub.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="{{ asset('assets/img/icons/garage.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('assets/img/icons/space.png') }}" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <img src="{{ asset('assets/img/bg-img/feature5.jpg') }}" alt="">

                        <div class="tag">
                            <span>For Sale</span>
                        </div>
                        <div class="list-price">
                            <p>$945 679</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <h5>Town House in Los Angeles</h5>
                        <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                            <div class="new-tag">
                                <img src="{{ asset('assets/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('assets/img/icons/bathtub.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="{{ asset('assets/img/icons/garage.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('assets/img/icons/space.png') }}" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="600ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <img src="{{ asset('assets/img/bg-img/feature6.jpg') }}" alt="">

                        <div class="tag">
                            <span>For Sale</span>
                        </div>
                        <div class="list-price">
                            <p>$945 679</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <h5>Town House in Los Angeles</h5>
                        <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                            <div class="new-tag">
                                <img src="{{ asset('assets/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('assets/img/icons/bathtub.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="{{ asset('assets/img/icons/garage.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('assets/img/icons/space.png') }}" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<section class="south-editor-area d-flex align-items-center">
    <!-- Editor Content -->
    <div class="editor-content-area">
        <!-- Section Heading -->
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

    <!-- Editor Thumbnail -->
    <div class="editor-thumbnail">
        <img src="{{ asset('assets/img/bg-img/editor.jpg') }}" alt="">
    </div>
</section>
<!-- ##### Editor Area End ##### -->
@endsection

@section('script')
    <!-- Insert script here -->
@endsection
    
