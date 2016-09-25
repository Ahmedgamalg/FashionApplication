<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodect;

use App\Http\Requests;

class ProdectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $prodect_name=$request->prodect_name;
        $prodect_price=$request->prodect_price;
        $prodect_quantity=$request->prodect_quantity;
        $file=$request->file('prodect_pic');
        $destinationPath='website/images';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$filename);
        $catogry_id=$request->catogry_id;

        $new_progect= New Prodect;
        $new_progect->prodect_name=$prodect_name;
        $new_progect->prodect_price=$prodect_price;
        $new_progect->prodect_quantity=$prodect_quantity;
        $new_progect->prodect_pic=$filename;
        $new_progect->catogry_id=$catogry_id;
        $new_progect->save();
        return redirect ('catogry/'.$catogry_id);




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
        //
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
        $prodect_name=$request->prodect_name;
        $prodect_price=$request->prodect_price;
        $prodect_quantity=$request->prodect_quantity;
        $catogry_id=$request->catogry_id;
        $prodect=Prodect::find($id);
        $prodect->prodect_name=$prodect_name;
        $prodect->prodect_price=$prodect_price;
        $prodect->prodect_quantity=$prodect_quantity;
        if ($request->hasFile('prodect_pic')) {
            
       $file=$request->file('prodect_pic');
       $name = time() . '-' . $file->getClientOriginalName();                                                                                                             
        $file->move(public_path('website/images'), $name);  
        $prodect->prodect_pic=$name;} 
        $prodect->save();
        return redirect('catogry/'.$catogry_id); 
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $catogry_id=$request->catogry_id;
        Prodect::destroy($id);
        return redirect('catogry/'.$catogry_id); 
        //
    }
    

}
