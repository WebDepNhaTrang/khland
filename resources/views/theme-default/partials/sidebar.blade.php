<div class="blog-sidebar-area">
    <!-- Search Widget -->
    <div class="search-widget-area mb-50">
        <form action="{{ route('frontend.pages.search') }}" method="get">
            <input type="search" name="search" id="search" placeholder="Search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- BĐS bán -->
    @php
        $land_buy = getAllLands('buy', '*', 'created_at', 'desc', 3);
    @endphp
    <!-- Catagories Widget -->
    <div class="featured-properties-slides owl-carousel mb-50">
        @foreach($land_buy as $v)
        <!-- Single Slide -->
        <div class="single-featured-property">
            <!-- Property Thumbnail -->
            <div class="property-thumb">
                <img src="{{ Voyager::image($v->image) }}" alt="">

                <div class="tag">
                    <span>Bán</span>
                </div>
                <div class="list-price">
                    <p>{{ $v->price }}</p>
                </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
                <h5>{{ $v->name }}</h5>
                <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">{{ $v->address }}</p>
                <p class="excerpt">{{ shorten_text($v->description, 170, '...', true) }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- BĐS bán -->
    @php
        $land_rent = getAllLands('rent', '*', 'created_at', 'desc', 3);
    @endphp
    <!-- Catagories Widget -->
    <div class="featured-properties-slides owl-carousel">
        @foreach($land_rent as $v)
        <!-- Single Slide -->
        <div class="single-featured-property">
            <!-- Property Thumbnail -->
            <div class="property-thumb">
                <img src="{{ Voyager::image($v->image) }}" alt="">

                <div class="tag">
                    <span>Cho thuê</span>
                </div>
                <div class="list-price">
                    <p>{{ $v->price }}</p>
                </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
                <h5>{{ $v->name }}</h5>
                <p class="location"><img src="{{ asset('assets/img/icons/location.png') }}" alt="">{{ $v->address }}</p>
                <p class="excerpt">{{ shorten_text($v->description, 170, '...', true) }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>