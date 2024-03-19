<!-- <section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach ($latest as $later)
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('images/' . $later->latestimage) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $later->latestname}}</h6>
                                    <span>{{ $later->latestprice}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>









            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>TopRated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach ($rated as $rate)
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('images/' . $rate->ratedimage) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $rate->ratedname}}</h6>
                                    <span>{{ $rate->ratedprice}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>





            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach ($reviews as $review)
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('images/' . $review->reviewimage) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $review->reviewname}}</h6>
                                    <span>{{ $review->reviewprice}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="latest-product spad">
    <div class="container">
        <div class="latest-product__text">
            <h4>Watch Products</h4>
        </div>
        <div class="row">
            @foreach ($latest as $later)
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('images/' . $later->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $later->name}}</h6>
                                    <span>{{ $later->price}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="latest-product__text">
            <h4>Sticker Products</h4>
        </div>
        <div class="row">
            @foreach ($rated as $rate)
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('images/' . $rate->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $rate->name}}</h6>
                                    <span>{{ $rate->price}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="latest-product__text">
            <h4>Branding Products</h4>
        </div>
        <div class="row">
            @foreach ($reviews as $review)
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('images/' . $review->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $review->name}}</h6>
                                    <span>{{ $review->price}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>