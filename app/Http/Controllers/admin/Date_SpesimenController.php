<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Date_Spesimen;
use Carbon\Carbon;

class Date_SpesimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date_spesimens = Date_Spesimen::latest()->paginate(10);
        return view('admin.date_spesimen.index', ['date_spesimen'=>$date_spesimens,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date_spesimens = DateSpesimen::get();

        return view('admin.date_spesimen.create', ['date_spesimen'=>$date_spesimens,]);
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

        $datespesimen = New DateSpesimen;
        $datespesimen->tanggal = Carbon::create($request->tanggal);
        $datespesimen->slug = str_slug($request->tanggal);
        $datespesimen->save();

        return redirect()->route('admin.datespesimen.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datespesimens = DateSpesimen::get($id);
        return view('admin.datespesimen.edit',[
            'datespesimen'=>$datespesimens,
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
        $datespesimen = DateSpesimen::find($id);

        return view('admin.datespesimen.edit',['datespesimen'=>$datespesimen,]);
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

        $datespesimen = New DateSpesimen;
        $datespesimen->tanggal = Carbon::create($request->tanggal);
        $datespesimen->save();

        return redirect()->route('admin.datespesimen.index')->withSuccess('Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datespesimen = DateSpesimen::find($id);
        $datespesimen->delete();
        return redirect()->route('admin.datespesimen.index')->with('danger','Berhasil dihapus');
    }
}
