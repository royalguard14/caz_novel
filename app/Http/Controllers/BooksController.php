<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Genre;
use Auth;
use DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        
        return view('admin.books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $genre=Genre::pluck('name','id');
       return view('admin.books.create',compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');
        $loged=Auth::user();

        
        $public_path=public_path();
        //$public_path='/home/k09i8jprf9mr/public_html';

       $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randomu=substr(str_shuffle($permitted_chars), 0, 6);
       $cover_name='cover_photo.png';
       $cover_path='books/'.$randomu.'/cover_photo.png';

       $pdf_name = $request->file('pdf')->getClientOriginalName();
       $pdf_path='books/'.$randomu.'/'.$pdf_name;
        


        
        $destinationPath = $public_path.'/books/'.$randomu;
        $request->file('cover')->move($destinationPath, $cover_name);
        $request->file('pdf')->move($destinationPath, $pdf_name);
       
        $postdata['genre_id'] = $request->genre;
        $postdata['code'] = $randomu;
        $postdata['title'] = mb_strtolower($request->title);
        $postdata['author'] = mb_strtolower($request->author);
        $postdata['desc'] = $request->description;
        $postdata['cover'] = $cover_path;
        $postdata['path'] = $pdf_path;
        $postdata['uploader'] = $loged->id;
        $postdata['hashtag'] = str_replace(" ","",$request->hashtag);
        
         $data = new Books($postdata);
                $data->save();


 return redirect('book')->with('message','success');
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
