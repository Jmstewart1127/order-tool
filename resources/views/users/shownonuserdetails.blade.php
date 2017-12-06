@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                @if (count($nonUserOrders) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Orders
                        </div>

                        <div class="panel-body">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->name }}</p>
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->email }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="member_number" class="col-md-4 control-label">Member Number</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->member_number }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="phone_number" class="col-md-4 control-label">Phone Number</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->phone_number }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="pin_numnber" class="col-md-4 control-label">Member PIN</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->pin_number }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="street_address" class="col-md-4 control-label">Street Address</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->street_address }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="city" class="col-md-4 control-label">City</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->city }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="state" class="col-md-4 control-label">State</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->state }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="zip" class="col-md-4 control-label">ZIP Code</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->zip }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="card_number" class="col-md-4 control-label">Card Number (optional)</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->card_number }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="expiration" class="col-md-4 control-label">Expiration Date (optional)</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->expiration }}</p>
							</div>
						</div>

						<div class="form-group">
							<label for="security_code" class="col-md-4 control-label">3-digit Security Code (optional)</label>

							<div class="col-md-6">
                                <p>{{ $nonUserOrders->security_code }}</p>
							</div>
						</div>
                            <table class="table table-striped task-table">
                                <thead>
                                    <th>Item Number</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Mark Complete</th>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="table-text"><div>{{ $order->item_number }}</div></td>
                                        <td class="table-text"><div>{{ $order->description }}</div></td>
                                        <td class="table-text"><div>{{ $order->quantity }}</div></td>
                                        <td class="table-text">
                                            <form action="{{ url('orders/complete/' .$order->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
            <a href="/orders/create">Add Order</a>
        </div>
    </div>
@endsection
