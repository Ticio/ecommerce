@extends('layouts.master_template')

@section('links')
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/products.css">
  <link rel="stylesheet" href="/css/store.css">
  <link rel="stylesheet" href="/css/nav.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
  <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('nav-section')
    @include('layouts.nav_template')
@endsection


@section('container-two-section-one')
    
    <br>
    <br><br>
    <br><br>
    
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

                    <div class="clearfix">
                      <a class="btn btn-primary" data-toggle="modal" data-target="#modal_view{{$product->id}}">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>     Details</a>
                      
                      <a id="edit_prod" data-toggle="modal" data-target="#modal_edit{{$product->id}}" class="btn btn-success" role="button"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>           Edit</a>

                      {{-- <a id="delete_pro" href="{{ route('store/delete', ['id' => $product->id]) }}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>           Delete</a> --}}
                      <a id="delete_pro" data-toggle="modal" class="btn btn-danger" data-target="#modal_delete{{$product->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>           Delete</a>
                    </div>

                  </div>
                </div>
            </div>

            <div class="modal  fade" id="modal_view{{$product->id}}" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center">Product Details</h3>
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
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close &times;</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal  fade" id="modal_delete{{$product->id}}" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title text-center">Product Details</h3>
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
                    </div>
                    <hr>

                    <h4 class="text-center text-danger">Are you sure you want to remove this product?</h4>

                    <div class="modal-footer">
                      <a href="{{ route('store/delete', ['id' => $product->id]) }}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>           Delete</a>
                    </div>
                  </div>
                </div>
            </div>


            <div class="modal fade" id="modal_edit{{$product->id}}" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title text-center">Editing Product Details</h3>
                    </div>
                    <div class="modal-body">

                      <div class="row">
                        
                        <form class="text-left" enctype="multipart/form-data" method="post" action="{{ route('store/update', ['id' => $product->id]) }}">
                          
                          {{csrf_field()}}
                          
                          <div>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                              <input type="text" class="form-control" value="{{ $product->name }}" name="name" placeholder="Product name" required>
                            </div>

                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-diamond"></i></span>
                              <input type="number" min="50" class="form-control" value="{{ $product->price }}" name="price" placeholder="Price in Rupees" required>
                            </div>

                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                              <input type="number" min="1" class="form-control" value="{{ $product->quantity }}" name="quantity" placeholder="Quantity" required>
                            </div>

                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-tint"></i></span>
                              <input type="color" class="form-control" value="{{ $product->color }}" name="color" placeholder="Color" required>
                            </div>

                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                              <input type="text" class="form-control" name="size" value="{{ $product->size }}" placeholder="Product Size. 1-Clothes: S, XL, M, etc. 2-Electronics: small, large, etc. 3-Shoes: 46, etc..." required>
                            </div>

                            <br>
                            <div class="form-group">
                              <select class="form-control" name="product_type_id">
                                <option value="1" selected disabled>Product type</option>
                                <option value="1">Clothe</option>
                                <option value="2">Electronic</option>
                                <option value="3">Shoe</option>
                                <option value="4">Jewellery</option>
                                <option value="5">Book</option>
                                <option value="6">Other</option>
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
                              <textarea placeholder="Product Description" name="description" class="form-control" rows="1" cols="10">{{ $product->description }}</textarea>
                            </div>

                            <input class="btn btn-success" type="submit" name="edit" value="Save">

                          </div>
                        </form>

                        <div class="modal-footer">

                            {{-- <a href="{{ route('store/edit', ['id' => $product->id]) }}" class="btn btn-success" role="button"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>           Save</a> --}}

                            {{-- <a href="{{ route('store/update', ['id' => $product->id]) }}" class="btn btn-success" role="button"><span class="glyphicon glyphicon-" aria-hidden="true"></span>           Save</a> --}}
                        </div>

                      </div>
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
