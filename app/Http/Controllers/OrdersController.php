<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\NonUserOrders;
use App\Orders;
use App\User;

class OrdersController extends Controller
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
        $userId = Auth::id();

        $o = new Orders;

        $o->user_id = $userId;

        $o->non_user_id = 0;

        $o->item_number = request('item_number');

        $o->description = request('item_description');

        $o->quantity = request('quantity');

        $o->save();

        return $this->showByUserId($userId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $orders = Orders::all();

        return view('orders.show', compact('orders', $orders));
    }
    
    public function showByUserId() 
    {
        $userId = Auth::id();

        $orders = DB::table('orders')->where('user_id', '=', $userId)->get();
        
        return view('orders.showordersbyuser', compact('orders', $orders));
    }

    public function adminShow() 
    {
        $userId = Auth::id();
        
        $admin = DB::table('users')->where('id', '=', $userId)->first();
    
        $orders = Orders::all();

        $nonUserOrders = NonUserOrders::all();

        if ($admin->is_admin) {
            return view('orders.adminshow')
            ->with('orders', $orders)
            ->with('nonUserOrders', $nonUserOrders);
        }
    }

    public function showUserDetailsAndOrderForAdmin($id) 
    {
        $userId = Auth::id();

        $admin = DB::table('users')->where('id', '=', $userId)->first();

        $user = DB::table('users')->where('id', '=', $id)->first();

        $orders = DB::table('orders')->where('user_id', '=', $id)->get();

        if ($admin->is_admin) {
            return view('users.showuserdetails') 
            ->with('user', $user)
            ->with('orders', $orders);
        }
    }

    public function complete($id) 
    {
        $order = DB::table('orders')->where('id', '=', $id)->delete();

        return $this->show();
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
