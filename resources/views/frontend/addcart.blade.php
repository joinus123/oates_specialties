@include('frontend.include.header')
<!-- end-header -->
<!-- inner-banner -->
<div class="banner">

    <div class="col-md-12">
        <div class="sub-page-heading">
            <div class="container">
                <h2>cart</h2>
            </div>
        </div>

    </div>
</div>
<!-- end-inner-banner -->

<!-- whishlist -->
<section class="whishlist inner_padding">
    <div class="whishlist-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Remove</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="assets/images/seller-img2.png" class="img-fluid"></td>
                                    <td>TAP™ ADVANCED COMMAND TRAINER</td>
                                    <td>3</td>
                                    <td><span>$</span>10</td>
                                    <td><span>$</span>30</td>
                                    <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/seller-img2.png" class="img-fluid"></td>
                                    <td>TAP™ ADVANCED COMMAND TRAINER</td>
                                    <td>3</td>
                                    <td><span>$</span>10</td>
                                    <td><span>$</span>30</td>
                                    <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/seller-img2.png" class="img-fluid"></td>
                                    <td>TAP™ ADVANCED COMMAND TRAINER</td>
                                    <td>3</td>
                                    <td><span>$</span>10</td>
                                    <td><span>$</span>30</td>
                                    <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="check-out-btn float-right mt-4">
                <a href="{{ route('checkout') }}" class="checkout-btn">proceed checkout</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!-- end-whishlist -->
<!-- footer -->
@include('frontend.include.header')
