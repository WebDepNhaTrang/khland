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
<section class="about-content-wrapper section-padding-100">
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
                    <h2>Featured Properties</h2>
                    <p>Suspendisse dictum enim sit amet libero</p>
                </div>

                <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">

                    <!-- Single Slide -->
                    <div class="single-featured-property">
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

                    <!-- Single Slide -->
                    <div class="single-featured-property">
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

                    <!-- Single Slide -->
                    <div class="single-featured-property">
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

                    <!-- Single Slide -->
                    <div class="single-featured-property">
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
                    <h2>Meet The Team</h2>
                    <p>Suspendisse dictum enim sit amet libero</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb">
                        <img src="{{ asset('assets/img/bg-img/team1.jpg') }}" alt="">
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info">
                        <div class="section-heading">
                            <img src="{{ asset('assets/img/icons/prize.png') }}" alt="">
                            <h2>Jeremy Scott</h2>
                            <p>Realtor</p>
                        </div>
                        <div class="address">
                            <h6><img src="{{ asset('assets/img/icons/phone-call.png') }}" alt=""> +45 677 8993000 223</h6>
                            <h6><img src="{{ asset('assets/img/icons/envelope.png') }}" alt=""> office@template.com</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb">
                        <img src="{{ asset('assets/img/bg-img/team2.jpg') }}" alt="">
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info">
                        <div class="section-heading">
                            <img src="{{ asset('assets/img/icons/prize.png') }}" alt="">
                            <h2>Maria Williams</h2>
                            <p>Realtor</p>
                        </div>
                        <div class="address">
                            <h6><img src="{{ asset('assets/img/icons/phone-call.png') }}" alt=""> +45 677 8993000 223</h6>
                            <h6><img src="{{ asset('assets/img/icons/envelope.png') }}" alt=""> office@template.com</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="750ms">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb">
                        <img src="{{ asset('assets/img/bg-img/team3.jpg') }}" alt="">
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info">
                        <div class="section-heading">
                            <img src="{{ asset('assets/img/icons/prize.png') }}" alt="">
                            <h2>Patrick Joe</h2>
                            <p>Realtor</p>
                        </div>
                        <div class="address">
                            <h6><img src="{{ asset('assets/img/icons/phone-call.png') }}" alt=""> +45 677 8993000 223</h6>
                            <h6><img src="{{ asset('assets/img/icons/envelope.png') }}" alt=""> office@template.com</h6>
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