@extends('layouts.app') @section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Add Item
			</div>

			<div class="panel-body">
				<!-- Display Validation Errors -->

                @if (Auth::guest())
				<!-- New Task Form -->
				<h3 style="text-align: center">Create an <a href="/register">account</a> and never fill out this form again!</h3><hr>
				<form action="/nonuserorders/store" method="POST" class="form-horizontal">
					{{ csrf_field() }} 
                        <!-- Item Number -->
                        <div class="form-group">
                            <label for="item_number" class="col-md-4 control-label">Item Number</label>

                            <div class="col-md-6">
                                <input type="text" name="item_number" id="item-number" class="form-control">
                            </div>
                        </div>

                        <!-- Item Description -->
                        <div class="form-group">
                            <label for="item_description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input type="text" name="item_description" id="item-description" class="form-control">
                            </div>
                        </div>

                        <!-- Quantity -->
                        <div class="form-group">
                            <label for="quantity" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input type="text" name="quantity" id="quantity" class="form-control">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="member_number" class="col-md-4 control-label">Member Number</label>

							<div class="col-md-6">
								<input id="member_number" type="member_number" class="form-control" name="member_number" required> @if ($errors->has('member_number'))
								<span class="help-block">
									<strong>{{ $errors->first('member_number') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="phone_number" class="col-md-4 control-label">Phone Number</label>

							<div class="col-md-6">
								<input id="phone_number" type="phone_number" class="form-control" name="phone_number" required> @if ($errors->has('phone_number'))
								<span class="help-block">
									<strong>{{ $errors->first('phone_number') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="pin_numnber" class="col-md-4 control-label">Member PIN</label>

							<div class="col-md-6">
								<input id="pin_number" type="pin_number" class="form-control" name="pin_number" required> @if ($errors->has('pin_number'))
								<span class="help-block">
									<strong>{{ $errors->first('pin_number') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="street_address" class="col-md-4 control-label">Street Address</label>

							<div class="col-md-6">
								<input id="street_address" type="street_address" class="form-control" name="street_address" required> @if ($errors->has('street_address'))
								<span class="help-block">
									<strong>{{ $errors->first('street_address') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="city" class="col-md-4 control-label">City</label>

							<div class="col-md-6">
								<input id="city" type="city" class="form-control" name="city" required> @if ($errors->has('city'))
								<span class="help-block">
									<strong>{{ $errors->first('city') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="state" class="col-md-4 control-label">State</label>

							<div class="col-md-6">
								<input id="state" type="state" class="form-control" name="state" required> @if ($errors->has('state'))
								<span class="help-block">
									<strong>{{ $errors->first('state') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="zip" class="col-md-4 control-label">ZIP Code</label>

							<div class="col-md-6">
								<input id="zip" type="zip" class="form-control" name="zip" required> @if ($errors->has('zip'))
								<span class="help-block">
									<strong>{{ $errors->first('zip') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="card_number" class="col-md-4 control-label">Card Number (optional)</label>

							<div class="col-md-6">
								<input id="card_number" type="card_number" class="form-control" name="card_number"> @if ($errors->has('card_number'))
								<span class="help-block">
									<strong>{{ $errors->first('card_number') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="expiration" class="col-md-4 control-label">Expiration Date (optional)</label>

							<div class="col-md-6">
								<input id="expiration" type="expiration" class="form-control" name="expiration"> @if ($errors->has('expiration'))
								<span class="help-block">
									<strong>{{ $errors->first('expiration') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="security_code" class="col-md-4 control-label">3-digit Security Code (optional)</label>

							<div class="col-md-6">
								<input id="security_code" type="security_code" class="form-control" name="security_code"> @if ($errors->has('security_code'))
								<span class="help-block">
									<strong>{{ $errors->first('security_code') }}</strong>
								</span>
								@endif
							</div>
						</div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-md-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Create Order
                                </button>
                            </div>
                        </div>
                    </form>
				@else
                <form action="/orders/store" method="POST" class="form-horizontal">
                {{ csrf_field() }} 
                    <!-- Item Number -->
                    <div class="form-group">
                        <label for="item_number" class="col-md-4 control-label">Item Number</label>

                        <div class="col-md-6">
                            <input type="number" name="item_number" id="item-number" class="form-control">
                        </div>
                    </div>

                    <!-- Item Description -->
                    <div class="form-group">
                        <label for="item_description" class="col-md-4 control-label">Description</label>

                        <div class="col-md-6">
                            <input type="text" name="item_description" id="item-description" class="form-control">
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="form-group">
                        <label for="quantity" class="col-md-4 control-label">Quantity</label>

                        <div class="col-md-6">
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-md-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Create Order
                            </button>
                        </div>
                    </div>
                    </form>
				@endif
			</div>
		</div>

		<!-- Current Tasks -->

	</div>
</div>
@endsection