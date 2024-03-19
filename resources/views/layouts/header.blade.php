<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> benethemmanueli1701@gmail.com</li>
                            <li>Usafiri Bure kwa Bidhaa kuanzia Tsh 99,999</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    @guest
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <div>Admin</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                    @else
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <div>{{ Auth::user()->name}}</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fa fa-user"></i> Logout</a>
                            <form action="{{ route('logout') }}" method="post" id="logout-form">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="index-2.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ route('index')}}">Home</a></li>
                        <li><a href="{{ route('shopviews') }}">Shop</a></li>
                        <li><a href="#">ADD DATA</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{ route ('categories.createcategory')}}">Add Category</a></li>
                                <li><a href="{{ route ('products.create')}}">Add Product</a></li>
                                <li><a href="{{ route ('featured.createfeatured')}}">Add Featured</a></li>
                                <li><a href="{{ route ('latest.createlatest')}}">Add Latest</a></li>
                                <li><a href="{{ route ('latest.createrated')}}">Add rated</a></li>
                                <li><a href="{{ route ('review.createreview')}}">Add review</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="{{ route('shopcartadd')}}"><i class="fa fa-shopping-bag"></i> <span>{{ $cartItems->count() }}</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>