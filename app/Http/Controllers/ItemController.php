<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->price);

        // return $request;

        $item = new Item();
        $item -> name = $request->name ;
        $item -> price = $request->price ;
        $item -> stock = $request->stock;
        $item -> description = $request->description;
        $item->save();
        // return redirect()->back();
        return redirect()->route('item.index');
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
        $item = Item::find($id);
        return view('item.edit',compact('item'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        $item -> name = $request->name ;
        $item -> price = $request->price ;
        $item -> stock = $request->stock;
        $item -> description = $request->description;
        $item->update();
        return redirect()->route('item.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Item::find($id);
        if($item){
            $item->delete();
            return back();
        }
    }
}
