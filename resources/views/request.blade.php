@extends('layouts.master_template')

@section('links')

  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/buying.css">

@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection

@section('container-one-section-one')
  <br>
  <br>
  <br>
  <div class="row buying_form">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
           <div class="panel-heading panel-success text-center"><b>Product request</b></div>
              <div class="panel-body">
                <form class="text-left" enctype="multipart/form-data" method="post" action="request">

                    {{csrf_field()}}

                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="email" class="form-control" placeholder="Email" required>
                    </div>

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="tel" class="form-control" placeholder="Phone number">
                    </div>

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                      <input type="text" class="form-control" name="name" placeholder="Product name" required>
                    </div>

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-tint"></i></span>
                      <input type="color" class="form-control" name="color" placeholder="Color">
                    </div>

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                      <input type="text" class="form-control" name="size" placeholder="Product size">
                    </div>

                    <br>
                    <div class="form-group">
                      <select class="form-control" name="product_type_id">
                        <option value="1" selected disabled>Product type</option>
                        <option value="1">Clothe</option>
                        <option value="2">Electronic</option>
                        <option value="3"></option>
                        <option value="4">Other</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="product_category_id">
                        <option value="1" selected disabled>Condition</option>
                        <option value="1">Brand New</option>
                        <option value="2">Fairly Used</option>
                        <option value="3">Very Used</option>
                        {{-- Retrieve this information from the database --}}
                      </select>
                    </div>

                    <div class="form-group">
                      <textarea placeholder="Product Description" name="description" class="form-control" rows="1" cols="10"></textarea>
                    </div>

                    <br>
                    <div class="">
                      <button type="submit" class="btn btn-success"><i class="fa fa-retweet" aria-hidden="true"></i> Request  </button>
                      <button type="reset" class="btn btn-danger">Cancel <b>&times;</b></button>
                    </div>
                  </form>
              </div>
          </div>
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
