<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Cupboard;
use App\Models\Animal;

class CupboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cupboards = Cupboard::with('leptops')->get();

        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes get all cupboard",
            'data' => $cupboard
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
        $cupboard = Cupboard::create([
            'namaCupboard' => $request->namaCupboard,
            'description' => $request->description

        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes create cupboard",
            'data' => $cupboard
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cupboard $cupboards)
    {
        $cupboard = Cupboard::where('id', $cupboard->id)->with('leptops')->first();
        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes get cupboard with id = ".$cupboard->id,
            'data' => $cupboard
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
    public function update(Request $request, Cupboard $cupboard)
    {
        $cupboard ->update([
            'namaCupboard' => $request->namaCapboard,
            'description' => $request->description

        ]);
        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes update cupboard with id = ".$cupboard->id,
            'data' => $cupboard
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupboard $cupboard)
    {
        $cupboard->delete();
        return response()->json([
            'code' => 200,
            'status' => true,
            'massage' => "succes delete cupboard with id = ".$cupboard->id,
            'data' => ""
        ]);
    }
}
