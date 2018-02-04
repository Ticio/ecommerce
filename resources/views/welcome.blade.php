@extends('layouts.master_template')

@section('links')
  <link rel="stylesheet" href="css/welcome.css">
@endsection

@section('container-two-section-one')

    <div class="message text-center">

          <div class="row">
             <h1 class="">Welcome to Swapnsells</h1>
          </div>

          <br>
          <div class="row">
            <h3>Are you here to:</h3>
          </div>

          <br>
          <div class="row">
            <div class="form-group">
              <a href="{{ url('home') }}" class="btn btn-lg btn-success joinUsBtn wow fadeInDown" data-wow-delay="1s">Buy?</a>

              <a href="{{ url('login') }}" class="btn btn-lg btn-primary joinUsBtn wow fadeInDown" data-wow-delay="1s">Sell?</a>
            </div>
          </div>
    </div>

@endsection
