<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Book,Shair};

class ShairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $records = Shair::with('books')->get();
        // return $records;
        return view('shair.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $records = Book::get();
        return view('shair.create',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Shair();
        $data->author_name = $request->author_name;
        $data->shair = $request->shair;
        $data->date = $request->date;
        $data->book_id = $request->book_id;
        $data->language = "urdu";
        $data->save();
        return redirect()->route('shair.index');
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
    public function search(Request $request)
    {
        $search = $request->search;
        $records = Shair::where('shair','Like','%'.$search.'%')->get();

        return view('shair.searchrecord',compact('records'));
    }
}
