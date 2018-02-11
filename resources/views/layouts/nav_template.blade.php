<!-- Sections -->
<nav class="navbar navbar-default" id="mainNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            
            {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false"> --}}
                
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <div class="nav-logo">
              <a class="navbar-brand" href="{{url('home')}}">
                 <img src="{{Storage::url('public/images/website/logo.png')}}" alt="logo">
                 Swapnsells
              </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('home')}}">Home</a></li>
                <li><a href="{{url('products')}}">Product</a></li>
                <li><a href="{{url('request')}}">Ask</a></li>

                @if (Auth::check())
                    <li>
                        <a href="{{ url('register_product') }}">
                            Sell Product
                        </a>
                    </li>

                    <li class="dropdown">
                       <a class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <span class="caret"></span></a>
                       <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                         
                            <li>
                                <a href=""><i class="fa fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('store', ['id' => Auth::user()->id ]) }}"><i class="fa fa-cog"></i> Store</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-cog"></i> Sells</a>
                            </li>
                            <li>
                                <a href="logout"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>

                       </ul>
                    </li>
                @else
                    <li class="login"><a href="{{ url('/login') }}">Sell</a></li>
                    <li class="login"><a href="{{ url('/register') }}">Sign Up</a></li>
                @endif

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<section id="social" class="social">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="social-wrapper">
                <div class="col-sm-4 col-md-4 col-xl-4">
                    <div class="social-contact">
                        <a href="#"><i class="fa fa-envelope"></i>swapnsells@gmail.com</a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-6 col-xl-4">
                    <form class="navbar-search" role="search" method="post" action="basicSearch">

                            {{csrf_field()}}
                            
                            <div class="input-group">
                            
                                {{-- <div class="input-group-btn">
                                    <button type="button" class="btn btn-search btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-search"></span>
                                        <span class="label-icon">Category</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li><a href="#">Clothe</a></li>
                                        <li><a href="#">Electronic</a></li>
                                        <li><a href="#">Jewellery</a></li>
                                        <li><a href="#">Book</a></li>
                                        <li><a href="#">Other</a></li>
                                    </ul>
                                </div> --}}
                    
                                <input type="text" name="searchName" class="form-control">
                            
                                <div class="input-group-btn">
                                    <input type="submit" class="btn btn-search btn-default" value="Search" />
                                </div>
                            </div>  
                    </form> 
                </div>

                <div class="col-sm-4 col-md-2 col-xl-4">
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
