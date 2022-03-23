<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Cupboard;
use App\Models\Leptop;

class LeptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = Leptop::with('cupboard')->get();

        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes get all leptop",
            'data' => $leptop
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = Leptop::create([
            'cupboard_id' => $request->cupboard_id,
            'nama' => $request->nama,
            'warna_leptop' => $request->warna_leptop

        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes create leptop",
            'data' => $leptop
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Leptop $leptop)
    {
        $leptop = Leptop::where('id', $leptop->id)->with('cupboard')->first();
        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes get leptop with id = ".$leptop->id,
            'data' => $leptop
        ]);
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
    public function update(Request $request, Leptop $leptop)
    {
        $leptop->update([
            'cupboard_id' => $request->cupboard_id,
            'nama' => $request->nama,
            'warna_leptop' => $request->warna_leptop
        ]);
        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes update leptop with id = ".$leptop->id,
            'data' => $leptop
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leptop $leptop)
    {
        $leptop->delete();
        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes delete leptop with id = ".$leptop->id,
            'data' => ""
        ]);
    }
}
