@extends('theme-default.layouts.master')

@section('title', 'Tìm Kiếm')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.land-buy'))
@section('fb_type', 'website')
@section('fb_title', 'Tìm Kiếm')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url({{ Voyager::image(setting('ban-bds.banner')) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Kết quả tìm kiếm</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
@include('theme-default.partials.search')
<!-- ##### Advance Search Area End ##### -->

<!-- ##### Listing Content Wrapper Area Start ##### -->
@if(isset($search_results))
<section class="listings-content-wrapper section-padding-50">
    <div class="container">
        <div class="row">
            @foreach($search_results as $v)
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <a href="{{ route('frontend.pages.land-detail', ['slug'=>$v->slug, 'id'=>$v->id]) }}">
                                <img src="{{ Voyager::image($v->image) }}" alt="{{ $v->name }}">
                            </a>
                            <div class="tag">
                                @if($v->type == 'buy')
                                <span>Bán</span>
                                @else
                                <span>Cho thuê</span>
                                @endif
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
        </div>
    </div>
</section>
@endif
<!-- ##### Listing Content Wrapper Area End ##### -->
@endsection

@section('script')
    <!-- Insert script here -->
@endsection