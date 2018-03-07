@extends('layouts.master_template')


@section('links')
    <link rel="stylesheet" href="css/back.css">
@endsection

@section('container-two-section-one')
    <div class="row" style="margin-top: 12%;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><b>Register</b></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('whatsapp_number') ? ' has-error' : '' }}">
                            <label for="whatsapp_number" class="col-md-4 control-label">Whatsapp number</label>

                            <div class="col-md-6">
                                <input id="whatsapp_number" type="tel" class="form-control" name="whatsapp_number" value="{{ old('whatsapp_number') }}">

                                @if ($errors->has('whatsapp_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('whatsapp_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree" value="1" {{-- {{ old('agree') == 1 ? 'checked' : '' }} --}} required> Agree with Terms
                                    </label>
                                    <label>
                                        <a data-toggle="modal" data-target="#terms" href="https://docs.google.com/document/d/1ybtBxBWHBs5bWkUB2CxCed2F8xzsb5cB7JzsUOSKRcs/edit?usp=sharing" target="_blank"> See terms and conditions </a>
                                    </label>

                                    <div class="modal  fade" id="terms" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h2 class="modal-title text-center">Terms and conditions</h2>
                                          </div>
                                          <div class="modal-body">

                                            <div class="" style="text-align: justify;">
                                                  
                 <p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the Swapnsells platform or website (the "Service") operated by Swapnsells ("us", "we", or "our").</p>

                 <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>

                 <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>

                 <h3>Purchases</h3>

                 <p>If you wish to purchase any product or service made available through the Service ("Checkout"), you may be asked to supply certain information relevant to your Purchase including, without limitation, your location, contact(mobile phone line or what’sapp) and your email address.</p>

                 <h3> Subscriptions </h3>

                 <p>Some parts of the Service are billed on a subscription basis ("Subscription(s)"). You will be billed in advance on a recurring  and periodic basis(“Billing Cycle”).Billing cycles are set either on a biweekly or  monthly or annual basis, depending on the type of subscription plan you select when purchasing a Subscription.</p>

                <p>At the end of each Billing Cycle, your Subscription will automatically renew under the exact same conditions unless you cancel it or Swapnsells cancels it. You may cancel your Subscription renewal by contacting Swapnsells customer support team.</p> 

                <p>A valid payment method, physical payment(cash) or bank tranfers, is required to process the payment for your Subscription. You shall provide Swapnsells with accurate and complete billing information including full name, address, telephone number, and a valid payment method information. By submitting such payment information, you automatically authorizing Swapnsells to charge all Subscription fees incurred through your account to any such payment instruments.</p> 

                <p>Should automatic billing fail to occur for any reason, swapnsells will issue an electronic invoice indicating that you must proceed manually, within a certain deadline, with the full payment corresponding to the billing period as indicated on the invoice.</p>

                <h3>Commissions</h3>
                <p>Customers on the Swapnsells platform with a seller account are expected to a pay a commission ranging from 5 - 10 percent of their weekly or monthly sales depending on your seller account type.</p>

                <p>A valid payment method, physical payment(cash) or bank tranfers, is required to process the payment for your Subscription. You shall provide Community Market with accurate and complete billing information including full name, address, telephone number, and a valid payment method information. By submitting such payment information, you automatically authorize Community Market to charge all Subscription fees incurred through your account to any such payment instruments.</p>


                <h3>Content</h3>

                <p>Our Service allows you to post, store, share and otherwise make available certain information, text, graphics, videos, or other material ("Content") which you want to sell or buy. You are responsible for constant upkeep and maintainance of the products you have uploaded on our platform.</p>

                <h3>Delivery Policy</h3>

                <p>Delivery of products to buyers on the platform is done solely  by the seller or owner of the account which the product was bought within the next 24hours after the order was place at the location specified by the buyer. Swapnsells at it’s own decretion, may decides to do the delivery.</p>

                <p>The 24hours delivery requirment will apply specifically for sellers who resides within ALU premisses. If the seller or owner of account happens to be out of this confinement, he/she is given 1-3days delivery time to deliver the product at the location specified by the buyer.</p>

                <h3>Return Policy</h3>

                <P>Any item bought on the platform could be return within 15days but this will depend on the agreement the buyer has with the seller. However, the buyer has the right to exercise the wish of a trial period of 15days which is to be granted by the buyer or provide reason why he/she can’t grant the request.</P>

                <h3>Termination</h3>
                <p>Failure to comply with your commission requirement 5days after its due date, give us the right to freeze your account of all it’s transaction.</p>

                <p>Failure to comply with your commission requirement 12days after its due date, gives us the right to close down your account and remove it from the platform.</p>

                <h3>Severability Policy</h3>

                <p>If a term in this agreement is deemed unenforceable by a court, the agreementt as a whole will not be deemed unenforceable.</p>

                <h3>Links To Other Web Sites</h3>

                <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Swapnsells or any other business entity we get in partnership with.
                Swapnsells has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Swapnsells shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

                <h3>Changes</h3>

                <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 15days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

                <h3>Contact Us</h3>

                <p>If you have any questions about these Terms, please contact us via swapnsells@gmail.com.</p>

                <p>Thank you.<p>

                                            </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close &times;</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Register
                                </button>
                                <a class="btn btn-primary" href="{{ url('/login') }}">
                                    Login
                                </a>
                                <a class="btn btn-toolbar" href="{{ url('home') }}">
                                    Home
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
