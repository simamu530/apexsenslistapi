<?php

namespace App\Http\Controllers;

use App\Models\Apexprolist;
use Illuminate\Http\Request;

class ApexprolistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Apexprolist::all();//Apexprolistの全データをitemsにいれる
        return response()->json([//全データをdataにいれて、
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Apexprolist::create($request->all());//新規作成
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apexprolist  $apexprolist
     * @return \Illuminate\Http\Response
     */
    public function show(Apexprolist $apexprolist)
    {
        $item = Apexprolist::find($apexprolist);
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apexprolist  $apexprolist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apexprolist $apexprolist)
    {
        $update = [
            'team' => $request->team,
            'name' => $request->name,
            'dpi' => $request->dpi,
            'mousesens' => $request->mousesens,
            'multisens' => $request->multisens,
            'hz' => $request->hz,
            'fov' => $request->fov,
            'mouse' => $request->mouse,
            'monitor' => $request->monitor,
            'gpu' => $request->gpu,
            'resolution' => $request->resolution,
            'mousepad' => $request->mousepad,
            'keyboard' => $request->keyboard,
            'headset' => $request->headset
        ];//
        $item = Apexprolist::where('id', $apexprolist->id)->update($update);
        if ($item) {
            return response()->json([
                'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message'=> 'Not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apexprolist  $apexprolist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apexprolist $apexprolist)
    {
        $item = Apexprolist::where('id', $apexprolist->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ],404);
        }
    }
}
