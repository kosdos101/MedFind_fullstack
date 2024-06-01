<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Categorys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items= Item::latest()->paginate(5);
        return view('pages.request',compact('items'))->with('i',(request()->input('page',1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorys::all();
        return view('pages.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //dd($request->all());
        $request->validate([
            'item_name'=>'required',
            'expire_date'=>'required',
            'price'=>'required',
            'photo'=>'required|image|mimes:jpg,jpeg,png|max:20000',
            'details'=>'required'
        ]);
        $input = $request->all();
        if($image = $request->file('photo')){
            $storedimage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->storeAs('public/images/items',$storedimage);
            $input['photo']=$storedimage;
        }
        Item::create($input);
        return redirect()->route('items.index')->with('success','Item Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $id)
    {
        return view('pages.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $id)
    {
        $categories = Categorys::all();
        return view('pages.edit',compact('id','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $id)
    {
        $request->validate([
            'item_name'=>'required',
            'expire_date'=>'required',
            'price'=>'required',
            'photo'=>'image|mimes:jpg,jpeg,png|max:20000',
            'details'=>'required'
        ]);
        $input = $request->all();
        if($image = $request->file('photo')){
            $storedimage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->storeAs('public/images/items',$storedimage);
            $input['photo']=$storedimage;
        }
        else {
            unset ( $input['photo'] );
        }
        $id->update($input);
        return redirect()->route('items.index')->with('success','Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $id)
    {
        $id->delete();
        if ($id->photo)
            Storage::disk('public')->delete('public/images/items' . $id->photo);

         return redirect()->route('items.index')->with('success', 'Item deleted');
    }
}
