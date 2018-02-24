@extends('layouts.master_template')

@section('links')
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/products.css">
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

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><b>Update Profile</b></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('user/update') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control" name="phone_number" value="{{ Auth::user()->phone_number }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('whatsapp_number') ? ' has-error' : '' }}">
                            <label for="whatsapp_number" class="col-md-4 control-label">Whatsapp number</label>

                            <div class="col-md-6">
                                <input id="whatsapp_number" type="tel" class="form-control" name="whatsapp_number" value="{{ Auth::user()->whatsapp_number }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <b>save</b>
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    <b>Reset</b>
                                </button>
                            </div>
                        </div>
                    </form>
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
