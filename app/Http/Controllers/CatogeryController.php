<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Catogry;
use App\Prodect;
use App\Http\Requests;

class CatogeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $catogry = Catogry::paginate(4);
       
        return view('site.catogry')->withcatogry($catogry);
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
        $admin_id=1;
        $catogry_name=$request->catogry_name;
        $catogry_discription=$request->catogry_discription;
        $file=$request->file('catogry_pic');
        $destinationPath='website/images';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$filename);

        $new_catogry= new Catogry;
        $new_catogry->catogry_name=$catogry_name;
        $new_catogry->catogry_discription=$catogry_discription;
        $new_catogry->catogry_pic=$filename;
        $new_catogry->admin_id=$admin_id;
        $new_catogry->save();

        return redirect ('catogry');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catogry=Catogry::find($id);
        $all_prodects=Catogry::find($id)->prodects;
        return view ('site.prodect')->withall_prodects($all_prodects)
                                   ->withcatogry($catogry);
                                   
        
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
        $catogry_name=$request->catogry_name;
        $catogry_discription=$request->catogry_discription;
        
        
        
        $catogry= Catogry::find($id);
        $catogry->catogry_name=$catogry_name;
        $catogry->catogry_discription=$catogry_discription;
        if ($request->hasFile('catogry_pic')) {
            
       $file=$request->file('catogry_pic');
       $name = time() . '-' . $file->getClientOriginalName();                                                                                                             
        $file->move(public_path('website/images'), $name);  
        $catogry->catogry_pic=$name; 
            
        }
        
        
        
        $catogry->save();
        return redirect('catogrycontrol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        catogry::destroy($id);
        return redirect('catogrycontrol');
        //
    }
    public function showAddCatogry()
    {
        return view('site/addCatogry');
        
    }
     public function showCatogryControl()
    {
         $catogry=Catogry::withTrashed()->paginate(2);
        return view('site.catogrycontrol')->withcatogry($catogry);
        
    }
    public function restored($id)
    {
        $catogry=Catogry::onlyTrashed()->find($id);
        $catogry->restore();
        
        return redirect('catogrycontrol');
        //
    }
    public function deleteforever($id)
    {
        $catogry=Catogry::onlyTrashed()->find($id);
        $catogry->forceDelete();
        
        return redirect('catogrycontrol');
        //
    }


}
