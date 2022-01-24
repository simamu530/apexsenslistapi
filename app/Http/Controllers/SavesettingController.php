<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\savesetting;

class SavesettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = savesetting::all(); //savesettingの全データをitemsにいれる
        return response()->json([ //全データをdataにいれて、
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
        $item = savesetting::create($request->all()); //新規作成
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\savesetting  $savesetting
     * @return \Illuminate\Http\Response
     */
    public function show(savesetting $savesetting)
    {
        $item = savesetting::find($savesetting);
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
     * @param  \App\Models\savesetting  $savesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, savesetting $savesetting)
    {
        $update = [
            'game_title' => $request->team,
            'mouse' => $request->name,
            'dpi' => $request->dpi,
            'mouse_sens' => $request->mousesens,
            'multi_sens' => $request->multisens,
            'hz' => $request->hz,
            'mouse_pad' => $request->mousepad,
            'keyboard' => $request->keyboard,
            'fov' => $request->fov,
            'mouse' => $request->mouse,
            'resolution' => $request->resolution,
        ]; //
        $item = savesetting::where('id', $savesetting->id)->update($update);
        if ($item) {
            return response()->json([
                'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\savesetting  $savesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(savesetting $savesetting)
    {
        $item = savesetting::where('id', $savesetting->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
