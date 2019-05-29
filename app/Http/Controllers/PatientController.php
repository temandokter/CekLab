<?php

namespace App\Http\Controllers;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $patients = Patient::get();

        return view('index',['patients'=>$patients,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
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
            'no_rm' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'pekerjaan' => 'required|min:3',
            'status' => 'required',
            'jenkel' => 'required|min:3',
            'no_antrian' => 'required',
        ]);

        $patient = new Patient;
        $patient->nama_pasien = $request->nama_pasien;
        $patient->slug - str_slug($request->nama_pasien);
        $patient->no_rm = $request->no_rm;
        $patient->tgl_lahir = $request->tgl_lahir;
        $patient->umur = $request->umur;
        $patient->pekerjaan = $request->pekerjaan;
        $patient->status = $request->status;
        $patient->jenkel = $request->jenkel;
        $patient->no_antrian = $request->no_antrian;
        $patient->save();

        return redirect()->route('patient.category.index')->withSuccess('Berhasil ditambahkan');
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
        $patient = Patient::find($id);

        return view('patient.edit',[
            'patient'=>$patient,
        ]);
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
            'no_rm' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'pekerjaan' => 'required|min:3',
            'status' => 'required',
            'jenkel' => 'required|min:3',
            'no_antrian' => 'required',
        ]);

        $patient = Patient::find($id);
        $patient->nama_pasien = $request->nama_pasien;
        $patient->no_rm = $request->no_rm;
        $patient->tgl_lahir = $request->tgl_lahir;
        $patient->umur = $request->umur;
        $patient->pekerjaan = $request->pekerjaan;
        $patient->status = $request->status;
        $patient->jenkel = $request->jenkel;
        $patient->no_antrian = $request->no_antrian;
        $patient->save();

        return redirect()->route('patient.category.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->route('patient.index')->with('danger','Berhasil dihapus');
    }
}
