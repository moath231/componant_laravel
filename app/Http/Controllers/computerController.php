<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;

class computerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('computer.index',[
            'computer' => computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request -> validate([
            'comname' => 'required',
            'comoragin' => 'required',
            'comprice' => 'required|integer',
        ]);

        $computer = new computer();

        $computer->name= strip_tags($request -> input('comname'));
        $computer->origan= strip_tags($request -> input('comoragin'));
        $computer->price= strip_tags($request -> input('comprice'));

        $computer->save();

        return redirect()->route('computer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {
        $index = computer::findOrFail($computer);


        return view('computer.show', [
            'computer' => $index
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $index = computer::findOrFail($id);
        return view('computer.edit',[
            'computer' => $index
        ]);
        echo $id;
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
        $update = Computer::findOrFail($id);

        $update->name= strip_tags($request -> input('comname'));
        $update->origan= strip_tags($request -> input('comoragin'));
        $update->price= strip_tags($request -> input('comprice'));

        $update->save();

        return redirect()->route('computer.show',[$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Computer::findOrFail($id);
        $destroy -> delete();
        return redirect()->route('computer.index');
    }
}
