<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $items = Item::orderBy('name','asc')->paginate(9);

        return view('item_list', compact('categories', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        return view('item_new', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:items'],
            'category' => ['required'],
        ]);
        if($validator)
        {
            $imgfile = $request->file('image');

            $item = new \App\Item;
            $item->name      = $request->input('name');
            $item->price     = $request->input('price');
            $item->description      = $request->input('description');
            $item->category_id      = $request->input('category');

            $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/item/',$fileNameToStore);

                $path = '/storage/item/'.$fileNameToStore;
                $item->photo = $path;
            }

            $item->photo = $path;
            $item->save();

            return redirect('item')->with("success_flashmsg", "New Item is ADDED in your data");
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::all();

        return view('item_edit', compact('item','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=Item::find($id);
        $item->name      = $request->input('name');
        $item->price     = $request->input('price');
        $item->description      = $request->input('description');
        $item->category_id      = $request->input('category');

        $imgfile = $request->file('image');

        $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/item/',$fileNameToStore);

                $path = '/storage/item/'.$fileNameToStore;
                $item->photo = $path;
            }
            else
            {
                $path = $request->input('oldphoto');
                $item->photo = $path;
            }

            $item->photo = $path;
            $item->save();



        return redirect('item')->with("success_flashmsg", "Existing Item is Updated in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Item::find($id);
        $item->delete();

        return redirect('item')->with("success_flashmsg", "Existing Item is Deleted in your data");
    }
}
