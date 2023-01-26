<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutDeveloper;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data=AboutDeveloper::all();
           return view('admin.aboutus.developer',compact('data'));
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

        $public_path=public_path();
        //$public_path='/home/k09i8jprf9mr/public_html';

        $filename = $request->file('image')->getClientOriginalName();
       $filename_path='developer/'.$filename;
        


        
        $destinationPath = $public_path.'/developer';
        $request->file('image')->move($destinationPath, $filename);

        
        $postdata['image'] = $filename_path;
        $postdata['name'] = mb_strtolower($request->name);
        $postdata['position'] = mb_strtolower($request->position);
        $postdata['socmed'] = $request->twitter.'|'.$request->facebook.'|'.$request->instagram.'|'.$request->linkedin;
       
         $data = new AboutDeveloper($postdata);
                $data->save();

    return back()->with('message','success');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
