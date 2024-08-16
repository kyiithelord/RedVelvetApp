<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input("query");
        $items = Item::where('name',"LIKE","%{$query}%")
                 ->orWhere('status',"LIKE","%{$query}%")
                 ->paginate(5);
        return view('item.index',compact('items'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::paginate(5);
        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('item.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        // dd($request->price);

        // return $request->image;
        if($request->image){
            $file = $request->image;
            $newName = "item_name".uniqid().".".$file->extension();
            // return $newName;
            $file->storeAs('public/itemImage',$newName);
        }

        $item = new Item();
        $item -> name = $request->name ;
        $item -> price = $request->price ;
        $item -> stock = $request->stock;
        $item -> description = $request->description;
        $item -> status = $request->status;
        $item -> category_id = $request->category_id;
        $item -> image = $newName;
        $item->save();
        // return redirect()->back();
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        return view('item.detail',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        return view('item.edit',compact('item','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, string $id)
    {

        $item = Item::find($id);
        $item -> name = $request->name ;
        $item -> price = $request->price ;
        $item -> stock = $request->stock;
        $item -> description = $request->description;
        $item -> status = $request->status;
        $item -> category_id = $request->category_id;
        if($request->image){
            $file = $request->image;
            $newName = 'item_image'.uniqid().".".$file->extension();
            $file->storeAs('public/itemImage',$newName);
            $item -> image = $newName;
        }
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
