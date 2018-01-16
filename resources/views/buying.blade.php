@extends('layouts.master_template')

@section('links')

  <link rel="stylesheet" href="css/buying.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">

@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection

@section('container-two-section-one')

  @if(Session::has('cart'))
  <div class="row buying_form">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading panel-success text-center"><b>Buying Form</b></div>

                <div class="panel-body">

                  <form class="text-left" method="post" action="">
                  {{csrf_field()}}
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Buyer Name" required>
                  </div>

                  </br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" required>
                  </div>

                  </br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                  </div>

                  </br>
                  <div class="form-group">
                    <select class="form-control" name="">
                      <option value="" selected disabled>Residence</option>
                      <option value="">Paradise</option>
                      <option value="">Piment Banane</option>
                      <option value="">Hypertek</option>
                      <option value="">Lotus</option>
                      <option value="">Lilas</option>
                    </select>
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                    <input type="text" class="form-control" placeholder="Room number"/>
                  </div>
                  </br>
                  <div class="form-group">
                    <textarea name="comment" placeholder="Additional comment" class="form-control" rows="1" cols="10"></textarea>
                  </div>

                  <div class="">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
  @else
    <div class="row">
      <div class="text-center alert alert-danger">
          No Items in the shopping cart
      </div>
    </div>
  @endif
@endsection

@section('footer-section')
    <br>
    <br>
    <br>
    @include('layouts.footer_template')
@endsection
