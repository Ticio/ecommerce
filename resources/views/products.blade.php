@extends('layouts.master_template')

@section('links')
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
  <link rel="stylesheet" href="css/footer.css">
@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection


@section('container-two-section-one')
    
    <br>
    <br>
    <br>
    <br>

    {{-- <div class="row">
      <form action="forTest" method="post" enctype="multipart/form-data">

        {{csrf_field()}}
          <div class="form-group col-md-3">
            <select class="form-control" name="product_type_id">
              <option value="0" selected disabled>Product type</option>
              <option value="0">Any</option>
              <option value="1">Clothe</option>
              <option value="2">Electronic</option>
              <option value="3">Shoe</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <select class="form-control" name="condition">
              <option value="Brand New" selected disabled>Condition</option>
              <option value="0">Any</option>
              <option value="Brand New">Brand New</option>
              <option value="Fairly Used">Fairly Used</option>
              <option value="Very Used">Very Used</option>
              
          </div>

          <div class="form-group col-md-3">
            <select class="form-control" name="product_size">
              <option value="Brand New" selected disabled>Size</option>
              <option value="0">Any</option>
              <option value="Brand New">XL</option>
              <option value="Fairly Used">XS</option>
              <option value="Very Used">S</option>
            </select>
          </div>
        
          <div class="col-md-3">
            <input class="btn btn-primary" type="submit" name="search" value="Search">
            <input class="btn btn-danger" type="reset">
          </div>
      </form>
    </div> --}}
    <br>

    @foreach ($products->chunk(4) as $product_chunck)
      <div class="row">

        @foreach ($product_chunck as $product)
          @if($product->state_id == 1)
            <div class="col-md-3">
                <div class="thumbnail">
                  <div class="legend text-center">
                    <h4 class="m_1">{{$product->name}}</h4>
                  </div>

                  <img src="{{Storage::url($product->image_path)}}" class="img-responsive" alt=""/>
                  
                  <div class="caption">
                    <p class="price">{{$product->price}}Rs</p>

                    <div class="clearfix btn-group">
                      <a class="pull-left btn btn-primary" data-toggle="modal" data-target="#modal_view{{$product->id}}">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>     Quick View</a>
                      
                      <a id="cart" href="{{route('cart', ['id' => $product->id])}}" class="pull-right btn btn-success" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>           Add to cart</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="modal  fade" id="modal_view{{$product->id}}" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center">Product View</h3>
                  </div>
                  <div class="modal-body">

                    <div class="row">
                      <div class="col-md-push-1 col-md-4">
                        <img src="{{Storage::url($product->image_path)}}" alt="Thumbnail Image 1" class="img-responsive">
                      </div>

                      <div class="col-md-push-1 col-md-6">
                        <div class="text-left">
                          <p><b>Name: </b>{{$product->name}}</p>
                          <p><b>Description: </b>{{$product->description}}</p>
                          <p><b>Price:</b> {{$product->price}}Rs</p>
                          <p><b>Size:</b> {{$product->size}}</p>
                          <p><b>Color:</b>
                            <span style="width: 20px; height: 10px; background-color: {{$product->color}}; color:{{$product->color}};border: 1px solid rgba(0,0,0);"> {{$product->color}}</span></p>
                          <p><b>Condition:</b> {{$product->product_condition}}</p>
                          <p><b>Description:</b> {{$product->description}} </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="{{route('cart', ['id' => $product->id])}}" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>           Add to cart</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close &times;</button>
                  </div>
                </div>
              </div>
            </div>

          @endif
        @endforeach
      </div>

      <div class="text-center">
          {!! $products->links(); !!}
        </div>
    @endforeach

@endsection

@section('footer-section')
    <br>
    <br>
    <br>
    @include('layouts.footer_template')
@endsection
