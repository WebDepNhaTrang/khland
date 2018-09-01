@extends('theme-default.layouts.master')

@section('title', 'Bán BĐS')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.land-buy'))
@section('fb_type', 'website')
@section('fb_title', 'Bán BĐS')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url({{ Voyager::image(setting('ban-bds.banner')) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Bán Bất Động Sản</h3>
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
@php
    $land_buy = getAllLands('buy', '*', 'created_at', 'desc', setting('ban-bds.paginate'));
@endphp
@if($land_buy->count()>0)
<section class="listings-content-wrapper section-padding-50">
    <div class="container">
        <div class="row">
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="south-pagination d-flex justify-content-end">
                    <nav aria-label="Page navigation">
                        {{ $land_buy->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- ##### Listing Content Wrapper Area End ##### -->
@endsection

@section('script')
    <!-- Insert script here -->
@endsection