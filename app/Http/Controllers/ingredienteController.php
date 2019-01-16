<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingrediente;
use Illuminate\Support\Facades\DB;

class ingredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredientes = ingrediente::all();
        return view("ingredientes.index",compact("ingredientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("ingredientes.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $input = $request->all();
       ingrediente::create($input);

        return redirect()->action("ingredienteController@index");
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
        
        $ingrediente = ingrediente::find($id);
        return view("ingredientes.edit", compact("ingrediente"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $input = $request->all();
        $obj = ingrediente::find($input['id']);
        $obj->fill($input);
        $obj->save();
        return redirect()->action("ingredienteController@index");

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
        $ingrediente = ingrediente::find($id);
        $ingrediente->delete(); 
        return redirect()->action("ingredienteController@index");

    }
}
