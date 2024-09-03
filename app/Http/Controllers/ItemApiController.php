<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return response()->json([
            'message' => 'success',
            'data' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = [];
        if($request->file('item_images')){
            foreach($request->file('item_images') as $file){
                $newName = "item_image".uniqid().".".$file->extension();
                $file -> storeAs('public/itemImage',$newName);
                $image[]=$newName;
            }
        }

        $item = new Item();
        $item -> name = $request -> name;
        $item -> price = $request -> price;
        $item -> stock = $request -> stock;
        $item -> description = $request -> description;
        $item -> status = $request -> status;
        $item -> category_id = $request -> category_id;
        $item -> item_images = json_encode($image);
        $item -> save();
         return response()->json([
                'message' => 'Item store successfully.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = item::find($id);
        $item -> name = $request -> name;
        $item -> price = $request -> price;
        $item -> stock = $request -> stock;
        $item -> description = $request -> description;
        $item -> status = $request -> status;
        $item -> category_id = $request -> category_id;
        $item -> save();
         return response()->json([
                'message' => 'Item update successfully.'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        if($id){
            $item->delete();
        };
        return response()->json([
            'message' => 'Item was destroyed successfully.'
        ]);
    }
}
