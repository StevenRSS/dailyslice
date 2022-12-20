<?php

namespace App\Http\Controllers;

use App\Models\order_data;
use App\Http\Requests\Storeorder_dataRequest;
use App\Http\Requests\Updateorder_dataRequest;

class OrderDataController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeorder_dataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_dataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_data  $order_data
     * @return \Illuminate\Http\Response
     */
    public function show(order_data $order_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_data  $order_data
     * @return \Illuminate\Http\Response
     */
    public function edit(order_data $order_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_dataRequest  $request
     * @param  \App\Models\order_data  $order_data
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_dataRequest $request, order_data $order_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_data  $order_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_data $order_data)
    {
        //
    }
}
