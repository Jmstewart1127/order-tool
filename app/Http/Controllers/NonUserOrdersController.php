<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;


class NonUserOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuo = new NonUserOrders;

        $nuo->name = request('name');

        $nuo->email = request('email');

        $nuo->member_number = request('member_number');

        $nuo->phone_number = request('phone_number');

        $nuo->pin_number = request('pin_number');

        $nuo->street_address = request('street_address');

        $nuo->city = request('city');

        $nuo->state = request('state');

        $nuo->zip = request('zip');

        $nuo->card_number = request('card_number');

        $nuo->expiration = request('expiration');

        $nuo->security_code = request('security_code');

        $nuo->save();

        $order = new Order;

        $order->non_user_id = $nuo->id;

        $order->item_number = request('item_number');

        $order->description = request('descriptiom');

        $order->quantity = request('quantity');

        $order->save();

        return view('orders.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
