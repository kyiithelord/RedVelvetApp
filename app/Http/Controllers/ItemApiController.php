<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $item = Item::find($id);
        $item -> name = $request -> name;
        $item -> price = $request -> price;
        $item -> stock = $request -> stock;
        $item -> description = $request -> description;
        $item -> status = $request -> status;
        $item -> category_id = $request -> category_id;
        $image = [];
        if($request->image){
            foreach($request->file('image') as $file){
                $newName = 'item_image'.uniqid().'.'.$file->extension();
                $file->storeAs('public/itemImage',$newName);
                $image[] = $newName;
            }
            $item->item_images = json_encode($image);
        };
        $item -> update();
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
        if($item){
            $images = json_decode($item->item_images);
            if($images){
                foreach($images as $image){
                    // Storage::delete('public/itemImage/'.$imag);
                    Storage::delete('public/itemImage/'.$image);;
                }
            }
            $item->delete();
        };
        return response()->json([
            'message' => 'Item was destroyed successfully.'
        ]);
    }
}
