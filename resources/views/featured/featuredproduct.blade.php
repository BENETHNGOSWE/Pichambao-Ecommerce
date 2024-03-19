<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>PichaMbao Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Cotton Jeans</li>
                            <li data-filter=".fresh-meat">Fresh Jeans</li>
                            <li data-filter=".vegetables">Short Jeans</li>
                            <li data-filter=".fastfood">Coat Jeans</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($featured as $feature )
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('images/' . $feature->image) }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{ $feature->name}}</a></h6>
                            <h5>TSH.{{ $feature->price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>    