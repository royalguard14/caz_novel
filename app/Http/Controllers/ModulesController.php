<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $modules = Modules::getAll();
        
        return view('admin.module.index',compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   



        $postdata = $request->all();
        $hash = \Hash::make($request->module);
        $postdata['encryptname'] = str_replace("/","", $hash);
        Modules::savePayload($postdata);

        return redirect('modules')->with('is_success', 'Module was successfully saved');
    }

    public function edit($id){

        $module = Modules::find($id);

        return view('modules.edit',compact('module'));
    }

    public function update(Request $request, $id){

        Modules::updatePayload($request->all(), $id);

        return redirect('modules')->with('is_success', 'Module was successfully saved');
    }
}
