<div class="south-search-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="advanced-search-form">
                    <!-- Search Title -->
                    <div class="search-title">
                        <p>Tìm kiếm</p>
                    </div>
                    <!-- Search Form -->
                    <form action="{{ route('frontend.pages.search') }}" method="get" id="advanceSearch">
                        <div class="row">
                            <div class="col-md-9 col-lg-9">
                                <div class="form-group">
                                    <input type="input" class="form-control" name="search" placeholder="Nhập nội dung bạn muốn tìm...">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <!-- Submit -->
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn south-btn">Tìm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>