@extends('layouts.master_template')

@section('links')

  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/app.css">

@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection

@section('container-two-section-one')
  <br>
  <br>
  <br>

  <div class="row text-justify">
    <div class="col-md-6">
        <h1> <i class="fa fa-cog"></i> Mission</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
           nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in .
        </p>
    </div>

    <div class="col-md-6">
        <h1><i class="fa fa-cog"></i> Vision</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
           nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in .
        </p>
    </div>
  </div>

    <br>
    <div class="row text-center">
      <center>  <h1>Our Values</h1> </center>
      <br>
      <br>
      {{-- <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="">
          <img class="img-responsive" src="{{Storage::url("images\products/nature.png")}}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum...</p>
          </div>
        </div>
      </div> --}}

      <div class="col-sm-4 col-md-4 col-lg-4">
        <h2>Integrity</h2>
      </div>

      <div class="col-sm-4 col-md-4 col-lg-4">
        <h2>Trustworthiness</h2>
      </div>

      <div class="col-sm-4 col-md-4 col-lg-4">
        <h2>Honesty</h2>
      </div>
  </div>

    <br>
  <div class="row text-center">
      <center>  <h1>Who we are</h1> </center>
      <br>
      <br>
      {{-- <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="">
          <img class="img-responsive" src="{{Storage::url("images\products/nature.png")}}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum...</p>
          </div>
        </div>
      </div> --}}
  </div>

  <div class="row text-center">
      <center>  <h1>Team</h1> </center>
      <br>
      <br>
      {{-- <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="">
          <img class="img-responsive" src="{{Storage::url("images\products/nature.png")}}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum...</p>
          </div>
        </div>
      </div> --}}

      <div class="col-md-6">
        <div class="">
          <img style="width: 250px;  height:150px" class="img-responsive" src="{{Storage::url("images\website/team_member1.jpg")}}" alt="Lights" style="width:100%">
            <h4>Ticio Victoriano</h4>
            <b>Tech Director Team</b>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="">
          <img style="width: 250px;  height:150px" class="img-responsive" src="{{Storage::url("images\website/team_member2.jpg")}}" alt="Lights" style="width:100%">
            <h4>Ticio Victoriano</h4>
            <b>Tech Director Team</b>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        </div>
      </div>
  </div>
@endsection

@section('footer-section')
    <br>
    <br>
    <br>
    @include('layouts.footer_template')
@endsection
