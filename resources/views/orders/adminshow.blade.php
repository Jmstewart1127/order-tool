@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                @if (count($orders) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Orders
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                <thead>
                                    <th>Item Number</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>View Order<th>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="table-text"><div>{{ $order->item_number }}</div></td>
                                        <td class="table-text"><div>{{ $order->description }}</div></td>
                                        <td class="table-text"><div>{{ $order->quantity }}</div></td>
                                        <td class="table-text">
                                            <a class="btn btn-default" href="{{ URL::asset('admin/orders/show/' .$order->id) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
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