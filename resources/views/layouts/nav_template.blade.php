<!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope"></i>c_market@gmail.com</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="{{url('getCart')}}"><i class="fa fa-shopping-cart"></i>
                                <span class="badge bg-green">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('home')}}"><span>C</span>-Market</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('home')}}">Home</a></li>
                        <li><a href="{{url('products')}}">Product</a></li>
                        <li><a href="{{url('request')}}">Ask</a></li>

                        @if (Auth::check())
                            <li>
                                <a href="register_product">
                                    Sell Product
                                </a>
                            </li>

                            <li class="dropdown">
                               <a class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                               <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                 {{-- <li><a href="#">Profile</a></li> --}}
                                 <li><a href="logout">Logout</a></li>
                               </ul>
                             </div>
                            </li>
                        @else
                            <li class="login"><a href="{{ url('/login') }}">Sell</a></li>
                            <li class="login"><a href="{{ url('/register') }}">Sign Up</a></li>
                        @endif

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
