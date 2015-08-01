<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;
use App\User;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Orders::all();
        return view('orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $order = new Orders();
        $order->user_id = \Auth::user()->id;
        $order->type = Request::input('orderTypeRadio');
        $order->goal = Request::input('form-order-goal');
        $order->group = Request::input('form-order-group');
        $order->format = Request::input('form-order-format');
        $order->title = Request::input('form-order-title');
        $order->intro = Request::input('form-order-intro');
        $order->mainText = Request::input('form-order-main-text');
        $order->comment = Request::input('form-order-comment');
       // $order->status = Request::input('form-order-goal');
        //$order->price = Request::input('form-order-goal');

        $order->save();
       
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {

         //return view('user.profile', ['user' => User::findOrFail($id)]);
        if(\Auth::check()) {
            $id = \Auth::user()->id;
            $orders = Orders::where('user_id', '=', "1")->get();
            $orders = Orders::all();
           
            //$one = Orders::where('user_id', '=', $id)->first();            //return view('orders', compact('orders'));
             //return $one;
             return view('orders', ['orders' => $orders,'id' => $id ]);
            // return view('orders', ['orders' => $orders,'id' => $id ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
