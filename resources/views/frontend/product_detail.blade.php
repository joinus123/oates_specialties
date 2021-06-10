@include('frontend.include.header')
<section class="product-detail">
    <div class="product-detail-wrapper">
        <div class="banner">

            <div class="col-md-12">
                <div class="sub-page-heading">
                    <div class="container">
                        <h2>Product Detail</h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row h-100 justify-content-center justify-item-center">
                <div class="col-md-6">
                    <div class="image-viewer">
                        <div class="main-image">
                            <img src="{{ asset('storage/media/' . $product_detail[0]['image']) }}" class="img-fluid">
                        </div>
                        <div class="secondary-images">
                            <div class="secondary-image">
                                <img src="{{ asset('storage/media/' . $product_detail[0]['image']) }}" class="img-fluid">
                            </div>
                            <div class="secondary-image">
                                <img src="{{ asset('storage/media/' . $product_detail[0]['image']) }}" class="img-fluid">
                            </div>
                            <div class="secondary-image">
                                <img src="{{ asset('storage/media/' . $product_detail[0]['image']) }}" class="img-fluid">
                            </div>
                            <div class="secondary-image">
                                <img src="{{ asset('storage/media/' . $product_detail[0]['image']) }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="detail">

                    </div>

                    <div class="lightbox" id="lightbox">
                        <img src="http://placehold.it/650x650" />
                        <div class="lightbox-controls">
                            <div class="lightbox-controls-close">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{ $product_detail[0]['name'] }}</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                    <div class="pera">
                        <p class="product-description">{{ $product_detail[0]['product_description'] }}</p>
                    </div>
                    <div class="action mt-4">
                        {{-- <a href="cart.php" class=" custom-btn">add to cart</a> --}}

                        <form action="{{ route('cart.store') }}" id="myForm" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $product_detail[0]['id'] }}" id="id" name="id">
                            <input type="hidden" value="{{ $product_detail[0]['name'] }}" id="name" name="name">
                            <input type="hidden" value="{{ $product_detail[0]['price'] }}" id="price" name="price">
                            <input type="hidden" value="{{ $product_detail[0]['image'] }}" id="image" name="image">
                            <input type="hidden" value="1" id="quantity" name="quantity">



                            <button type="submit" class="custom-btn" title="add to cart" data-tip="Add to Cart">
                                Add TO Card
                            </button>
                            {{-- <a onclick="mySubmit();"  id="myForm" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a> --}}
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.include.footer')
