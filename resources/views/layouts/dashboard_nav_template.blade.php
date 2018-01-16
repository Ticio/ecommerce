<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>C-Market</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        {{-- <div class="profile">
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
        </div> --}}
        <!-- /menu prile quick info -->

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>Operations</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-product-hunt"></i> Products <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.html">Create</a></li>
                            <li><a href="index.html">In Store</a></li>
                            <li><a href="index.html">Sold</a></li>
                            <li><a href="index.html">Removed</a></li>
                            <li><a href="index.html">Requests</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{url("users")}}">List all</a></li>
                            <li><a href="index.html">Create</a></li>
                            <li><a href="index.html">Managers</a></li>
                            <li><a href="index.html">Sellers</a></li>
                            <li><a href="index.html">Blocked</a></li>
                            <li><a href="index.html">Removed</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-table"></i> Dashboard </a></li>
                    <li><a><i class="fa fa-home"></i> Home </a></li>
                </ul>
            </div>
            {{-- <div class="menu_section">
                <h3>For later on</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-laptop"></i> Commission <span class="label label-success pull-right">Coming Soon</span></a>
                    </li>
                    <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                    </li>
                </ul>
            </div> --}}

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="C-Market">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Profile">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt="">Ticio Victoriano
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li><a href="javascript:;">  Profile</a>
                        </li>
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>
<!-- /top navigation -->
