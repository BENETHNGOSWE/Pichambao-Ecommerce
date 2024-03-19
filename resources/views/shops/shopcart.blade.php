@extends('layouts.main')
@section('content')


<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Organi Shop</h2>
                    <div class="breadcrumb__option">
                        <a href="index-2.html">Home</a>
                        <span>Shop</span>
                        <section class="shoping-cart spad">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="shoping__cart__table">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Products</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($cartItems as $details)
                                                  
                                                    <tr>
                                                        <td data-th="Product">
                                                            <div class="row">
                                                                <div class="col-sm-9">
                                                                    <h4 class="nomargin">
                                                                        @if(isset($details['image']))
                                                                        <img src="{{ asset('images') }}/{{ $details['image'] }}" width="100" height="100" class="img-responsive"/>
                                                                        @endif
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-th="Price">
                                                            @if(isset($details['price']))
                                                                ${{ $details['price'] }}
                                                            @endif
                                                        </td>
                                                        <td data-th="Quantity">
                                                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                                                        </td>
                                                        <td data-th="Subtotal" class="text-center">
                                                            @if(isset($details['price']))
                                                            ${{ $details['price'] * $details['quantity'] }}
                                                            @endif
                                                        </td>
                                                        <td class="actions" data-th="">
                                                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="shoping__cart__btns">
                                            <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                                            <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                                Upadate Cart</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="shoping__continue">
                                            <div class="shoping__discount">
                                                <!-- <h5>Discount Codes</h5>
                                                <form action="#">
                                                    <input type="text" placeholder="Enter your coupon code">
                                                    <button type="submit" class="site-btn">APPLY COUPON</button>
                                                </form> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="shoping__checkout">
                                            <h5>Cart Total</h5>
                                            <ul>
                                                <li>Subtotal <span>$454.98</span></li>
                                            </ul>
                                            <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<!-- Product Section End -->
@endsection