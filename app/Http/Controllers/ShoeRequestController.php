<?php

namespace HMD\Http\Controllers;

use HMD\Commands\ShoeRequestCommand;
use HMD\Http\Requests\ShowRequestRequest;
use Illuminate\Http\Request;

use HMD\Http\Requests;
use HMD\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ShoeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ShowRequestRequest  $request
     * @return Response
     */
    public function store(ShowRequestRequest $request)
    {
        $request->session()->put('shoe.request', [
            'brand' => $request->brand,
            'model' => $request->shoe_model,
            'size' => $request->size
        ]);

        return response()->redirectToRoute('checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
