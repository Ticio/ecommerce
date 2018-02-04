@extends('layouts.master_template')

@section('links')
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">
@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection

@section('container-one-section-one')
@endsection

@section('container-two-section-one')

  <br>
  <br>
  @if(session('success'))
    <div class="row">
      <div class="alert alert-success">
          <h2 class="text text-center">{{ session('success') }}</h2>
      </div>
    </div>
  @elseif(Session::has('cart'))
    <div class="row">

      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <ul class="list-group">
            @foreach ($products as $product)
              <li class="list-group-item">
                <span class="badge">{{$product['qty']}}</span>
                <strong>{{ $product['item']['name'] }}</strong>
                <span class="label label-success">{{ $product['price'] }}</span>
                <div class="btn-group">
                  <button class="btn btn-primary btn-xs dropdown-toggle" type="button" name="button" data-toggle="dropdown">Action <span class="caret"></span> </button>
                  <ul class="dropdown-menu">
                      <li>
                        <a data-toggle="modal" data-target="#modal_view{{$product['item']['id']}}">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                      </li>
                      <li><a href="{{route('reduceItem', ['id' => $product['item']['id']])}}">Reduce</a></li>
                      <li><a href="{{route('removeItem', ['id' => $product['item']['id']])}}">Remove all</a></li>
                  </ul>
                </div>
              </li>

               <div class="modal  fade" id="modal_view{{$product['item']['id']}}" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center">Product View</h3>
                  </div>
                  <div class="modal-body">

                    <div class="row">
                      <div class="col-md-push-1 col-md-4">
                        <img src="{{Storage::url($product['item']['$product->image_path'])}}" alt="Thumbnail Image 1" class="img-responsive">
                      </div>

                      {{-- <div class="col-md-push-1 col-md-6">
                        <div class="text-left">
                          <p><b>Name: </b>{{$product->name}}</p>
                          <p><b>Price:</b> {{$product->price}}Rs</p>
                          <p><b>Size:</b> {{$product->size}}</p>
                          <p><b>Color:</b>
                            <span style="width: 20px; height: 10px; background-color: {{$product->color}}; color:{{$product->color}};border: 1px solid rgba(0,0,0);"> {{$product->color}}</span></p>
                          <p><b>Condition:</b> {{$product->product_condition}}</p>
                          <p><b>Description:</b> {{$product->description}} </p>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close &times;</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong>Total: {{ $totalPrice }}</strong>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <a href="#" data-toggle="modal" data-target="#modal" class="btn btn-success" type="button" name="button">Checkout</a>

        <div class="modal  fade" id="modal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center">Checkout</h2>
              </div>
              <div class="modal-body">

                <form class="text-left" method="post" action="{{route('postCheckout')}}">
                    {{csrf_field()}}

                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Buyer Name" required>
                    </div>

                    </br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    </br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" required>
                    </div>

                    </br>
                    <div class="form-group">
                      <select class="form-control" name="residence">
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
                      <input type="text" name="room_number" class="form-control" placeholder="Room number"/>
                    </div>
                    </br>
                    <div class="form-group">
                      <textarea name="comment" placeholder="Additional comment" class="form-control" rows="1" cols="10"></textarea>
                    </div>

                    <div class="">
                      <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"> </i> Buy now</button>
                      <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh"></i></button>
                    </div>
              </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close &times;</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  @else
    <div class="row">
      <div class="alert alert-danger">
          <h2 class="text-center">The shopping cart is empty</h2>
      </div>
    </div>
  @endif

  <div class="" style="margin-top: 15%"></div>

@endsection

@section('footer-section')
    <br>
    <br>
    <br>
    @include('layouts.footer_template')
@endsection
