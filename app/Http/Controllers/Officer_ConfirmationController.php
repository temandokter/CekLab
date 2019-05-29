<?php

namespace App\Http\Controllers;
use App\Officer_Confirmation;
use Illuminate\Http\Request;

class Officer_ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officer_confirmation = Officer_Confirmation::get();

        return view('index',['officer_confirmation'=>$officer_confirmation,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officer_confirmation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pasien' => 'required|min:5',
            'tanggal' => 'required',
        ]);

        $officer_confirmation = New Officer_Confirmation;
        $officer_confirmation->nama_pasien = $request->nama_pasien;
        $officer_confirmation->tanggal = $request->tanggal;
        $employee->save();

        return redirect()->route('officer_confirmation.category.index')->withSuccess('Berhasil ditambahkan');
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
        $officer_confirmation = Officer_Confirmation::find($id);

        return view('officer_confirmation.edit',['officer_confirmation'=>$officer_confirmation,]);
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
            'nama_pasien' => 'required|min:5',
            'tanggal' => 'required',
        ]);

        $officer_confirmation = New Officer_Confirmation;
        $officer_confirmation->nama_pasien = $request->nama_pasien;
        $officer_confirmation->tanggal = $request->tanggal;
        $employee->save();

        return redirect()->route('officer_confirmation.category.index')->withSuccess('Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officer_confirmation = Officer_Confirmation::find($id);
        $officer_confirmation->delete();
        return redirect()->route('officer_confirmation.index')->with('danger','Berhasil dihapus');
    }
}
