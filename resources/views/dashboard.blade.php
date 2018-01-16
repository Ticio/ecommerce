@extends('layouts.dashboard_master_template')

@section('links')
@endsection

@section('nav-section')

    @include('layouts.dashboard_nav_template')

@endsection

@section('page-content')

  <!-- top tiles -->
  <div class="row tile_count">
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
          <div class="left"></div>
          <div class="right">
              <span class="count_top"><i class="fa fa-product-hunt"></i> Available Products</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
          <div class="left"></div>
          <div class="right">
              <span class="count_top"><i class="fa fa-square"></i> Sold Products</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
          </div>
      </div>

      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
          <div class="left"></div>
          <div class="right">
              <span class="count_top"><i class="fa fa-archive"></i> Total Requests</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
      </div>

      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
          <div class="left"></div>
          <div class="right">
              <span class="count_top"><i class="fa fa-users"></i> Total Users</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
          <div class="left"></div>
          <div class="right">
              <span class="count_top"><i class="fa fa-user-circle"></i> Total Sellers</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
          </div>
      </div>
      <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
          <div class="left"></div>
          <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Blocked Users</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
      </div>
  </div>
  <!-- /top tiles -->

@endsection
