@extends('layouts.master_template')

@section('links')
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
  <link rel="stylesheet" href="css/footer.css">
@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection

@section('container-one-section-one')
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <?php $i = 0; ?>
      @foreach ($products_slide as $product)
        

          @if ($i == 0)
            <div class="item active">
              
              <a data-toggle="modal" data-target="#modal_view{{$product->id}}">
                <img src="{{Storage::url($product->image_path)}}" class="img-responsive">
              </a>
              <div class="carousel-caption">

              {{-- <div>
                  <div class="carousel-description">

                    <h3 style="color: #fff;"><b>{{$product->name}}</b></h3>
                    <h4 style="color: #fff;"><b>{{$product->price}} mur</b></h4>
                    <div>
                      <a  id="cart" href="{{route('cart', ['id' => $product->id])}}" class="btn btn-default"><i class="fa fa-shopping-cart"> Buy</i></a>
                      <a class="btn btn-primary" data-toggle="modal" data-target="#modal_view{{$product->id}}">
                              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                    </div>

                  </div>
              </div> --}}
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
                          <p><b>Price:</b> {{$product->price}}Rs</p>
                          <p><b>Size:</b> {{$product->size}}</p>
                          <p><b>Color:</b>
                            <span style="width: 20px; height: 10px; background-color: {{$product->color}}; color:{{$product->color}};border: 1px solid rgba(0,0,0);"> {{$product->color}}</span></p>
                          <p><b>Condition:</b> {{$product->product_condition}}</p>
                          <p><b>Description:</b> {{$product->description}} </p>
                        </div>
                      </div>
                    </div>


                    <div class="row text-center">
                        <hr>
                        <h4 class="text-warning">For more information here is the seller's whatsapp number:  <b>{{ $product->user->whatsapp_number }}</b></h4>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="{{route('cart', ['id' => $product->id])}}" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>           Add to cart</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close &times;</button>
                  </div>
                </div>
              </div>
            </div>
          @else 

            <div class="item">
              <a data-toggle="modal" data-target="#modal_view{{$product->id}}">
                <img src="{{Storage::url($product->image_path)}}" class="img-responsive">
              </a>
              <div class="carousel-caption">

                  {{-- <div>
                    <div class="carousel-description">

                      <h3 style="color: #fff;"><b>{{$product->name}}</b></h3>
                      <h4 style="color: #fff;"><b>{{$product->price}} mur</b></h4>
                      <div>
                        <a  id="cart" href="{{route('cart', ['id' => $product->id])}}"" class="btn btn-default"><i class="fa fa-shopping-cart"> Buy</i></a>
                        <a class="btn btn-primary" data-toggle="modal" data-target="#modal_view{{$product->id}}">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                      </div>

                    </div>
                  </div> --}}
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
                          <p><b>Price:</b> {{$product->price}}Rs</p>
                          <p><b>Size:</b> {{$product->size}}</p>
                          <p><b>Color:</b>
                            <span style="width: 20px; height: 10px; background-color: {{$product->color}}; color:{{$product->color}};border: 1px solid rgba(0,0,0);"> {{$product->color}}</span></p>
                          <p><b>Condition:</b> {{$product->product_condition}}</p>
                          <p><b>Description:</b> {{$product->description}} </p>
                        </div>
                      </div>
                    </div>


                    <div class="row text-center">
                        <hr>
                        <h4 class="text-warning">For more information here is the seller's whatsapp number:  <b>{{ $product->user->whatsapp_number }}</b></h4>
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

          <?php $i++; ?>

        @endforeach 
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection


@section('container-two-section-one')
    
    @foreach ($products_page->chunk(4) as $product_chunck)
      <div class="row">

        @foreach ($product_chunck as $product)
          @if($product->state_id == 1)
            <div class="col-md-3">
                <div class="thumbnail">
                  <div class="legend text-center">
                    <h4 class="m_1">{{$product->name}}</h4>
                  </div>

                  <img src="{{Storage::url($product->image_path)}}" class="img-responsive" alt=""/>
                  
                  @if( $product->product_condition == "Brand New")
                    <div style="background-color: #25B08E;" class="product_condition">
                  @elseif( $product->product_condition == "Fairly Used")
                    <div style="background-color: #255;" class="product_condition">
                  @else
                    <div class="product_condition">      
                  @endif
                        <h6>{{$product->product_condition}}</h6>
                  </div>

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
                          <p><b>Price:</b> {{$product->price}}Rs</p>
                          <p><b>Size:</b> {{$product->size}}</p>
                          <p><b>Color:</b>
                            <span style="width: 20px; height: 10px; background-color: {{$product->color}}; color:{{$product->color}};border: 1px solid rgba(0,0,0);"> {{$product->color}}</span></p>
                          <p><b>Condition:</b> {{$product->product_condition}}</p>
                          <p><b>Description:</b> {{$product->description}} </p>
                        </div>
                      </div>
                    </div>

                    
                    <div class="row text-center">
                        <hr>
                        <h4 class="text-warning">For more information here is the seller's whatsapp number:  <b>{{ $product->user->whatsapp_number }}</b></h4>
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
    @endforeach
@endsection

@section('footer-section')
    <br>
    <br>
    <br>
    @include('layouts.footer_template')
@endsection
