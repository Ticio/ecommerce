@extends('layouts.master_template')

@section('links')
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/buying.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">
@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection

@section('container-two-section-one')

  <div>
    <br><br>
    @if(isset($error))
      <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> {{$error}}
      </div>
    @endif

    @if(isset($success))
      <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{$success}}
      </div>
    @endif

    <div class="row buying_form">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
             <div class="panel-heading panel-success text-center"><b>Product Registration</b></div>
                <div class="panel-body">
                  <form class="text-left" enctype="multipart/form-data" method="post" action="register_product">

                      {{csrf_field()}}

                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Product name" required>
                      </div>

                      <br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-diamond"></i></span>
                        <input type="number" min="50" class="form-control" name="price" placeholder="Price in Rupees" required>
                      </div>

                      <br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-tint"></i></span>
                        <input type="color" class="form-control" name="color" placeholder="Color" required>
                      </div>

                      <br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                        <input type="text" class="form-control" name="size" placeholder="Product Size. 1-Clothes: S, XL, M, etc. 2-Electronics: small, large, etc. 3-Shoes: 46, etc..." required>
                        <p class="help-block">Help text here.</p>
                      </div>

                      <br>
                      <div class="form-group">
                        <select class="form-control" name="product_type_id">
                          <option value="1" selected disabled>Product type</option>
                          <option value="1">Clothe</option>
                          <option value="2">Electronic</option>
                          <option value="3">Shoe</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <select class="form-control" name="product_condition">
                          <option value="Brand New" selected disabled>Condition</option>
                          <option value="Brand New">Brand New</option>
                          <option value="Fairly Used">Fairly Used</option>
                          <option value="Very Used">Very Used</option>
                          {{-- Retrieve this information from the database --}}
                        </select>
                      </div>

                      <div class="form-group">
                        <textarea placeholder="Product Description" name="description" class="form-control" rows="1" cols="10"></textarea>
                      </div>

                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-download"></i></span>
                        <input type="file" name="image" class="form-control" id="" placeholder="">
                      </div>

                      <br>

                      <div class="clearfix">
                        <div class="pull-left">
                          <button type="submit" class="btn btn-success">Add  <i class="fa fa-gift" aria-hidden="true"></i> </button>
                          <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                        <div class="pull-right">
                            <a  class="btn btn-danger" href="{{url('home') }}">Cancel <b>&times;</b></a>
                        </div>
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
