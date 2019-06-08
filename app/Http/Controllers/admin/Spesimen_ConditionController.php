<?php

namespace App\Http\Controllers;
use App\Spesimen_Condition;
use Illuminate\Http\Request;

class Spesimen_ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spesimen_condition = Spesimen_Condition::get();

        return view('index',['spesimen_condition'=>$spesimen_condition,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spesimen_condition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
        [
             'kondisi'=>'required|min:5',
             'pilihan'=>'required',
        ]);

        $spesimen_condition = New Spesimen_Condition;
        $spesimen_condition->kondisi = $request->kondisi;
        $spesimen_condition->pilihan = $request->pilihan;
        $spesimen_condition->save();

        return redirect()->route('spesimen_condition.category.index')->withSuccess('Berhasil Ditambahkan');
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
        $spesimen_condition = Spesimen_Condition::find($id);

        return view('spesimen_condition.edit',['spesimen_condition'=>$spesimen_condition,]);
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
        $this->validate($request, 
        [
            'kondisi'=>'required|min:5',
            'pilihan'=>'required',
        ]);

        $spesimen_condition = New Spesimen_Condition;
        $spesimen_condition->kondisi = $request->kondisi;
        $spesimen_condition->pilihan = $request->pilihan;
        $spesimen_condition->save();

        return redirect()->route('spesimen_condition.category.index')->withSuccess('Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spesimen_condition = Spesimen_Condition::find($id);
        $spesimen_condition->delete();
        return redirect()->route('spesimen_condition.index')->with('danger','Berhasil Dihapus');
    }
}
