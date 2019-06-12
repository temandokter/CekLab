<?php

namespace App\Http\Controllers;
use App\Date_Spesimen;
use Illuminate\Http\Request;

class Date_SpesimenController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date_spesimen = Date_Spesimen::get();

        return view('index',['date_spesimen'=>$date_spesimen,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('date_spesimen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['tanggal' => 'required',]);

        $date_spesimen = New Date_Spesimen;
        $date_spesimen->tanggal = $request->tanggal;
        $date_spesimen->save();

        return redirect()->route('date_spesimen.category.index')->withSuccess('Berhasil ditambahkan');
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
        $date_spesimen = Date_Spesimen::find($id);

        return view('date_spesimen.edit',['date_spesimen'=>$date_spesimen,]);
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
        $this->validate($request, [
            'tanggal' => 'required',
        ]);

        $date_spesimen = New Date_Spesimen;
        $date_spesimen->tanggal = $request->tanggal;
        $date_spesimen->save();

        return redirect()->route('date_spesimen.category.index')->withSuccess('Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $date_spesimen = Date_Spesimen::find($id);
        $date_spesimen->delete();
        return redirect()->route('date_spesimen.index')->with('danger','Berhasil dihapus');
    }
}
