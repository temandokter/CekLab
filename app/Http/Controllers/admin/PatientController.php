<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Patient;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $patients = Patient::latest()->paginate(10);
        return view('admin.patient.index',['patients'=>$patients,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::get();
        return view('admin.patient.create',[
            'patient'=>$patients,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Carbon::create($request->tgl_lahir));
        $this->validate($request, [
            'nama_pasien' => 'required|min:3',
            'no_rm' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'pekerjaan' => 'required|min:3',
            'status' => 'required',
            'jenkel' => 'required',
            'no_antrian' => 'required'
        ],[
            'required' => 'Atribut harus diisi',
        ]);

        $patient = new Patient;
        $patient->nama_pasien = $request->nama_pasien;
        $patient->slug = str_slug($request->nama_pasien);
        $patient->no_rm = $request->no_rm;
        $patient->tgl_lahir = Carbon::create($request->tgl_lahir);
        $patient->umur = $request->umur;
        $patient->pekerjaan = $request->pekerjaan;
        $patient->status = $request->status;
        $patient->jenkel = $request->jenkel;
        $patient->no_antrian = $request->no_antrian;
        $patient->save();

        

        return redirect()->route('admin.doctor.create')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients = Patient::get();
        return view('admin.patient.index',[
            'patient'=>$patients,
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
        $patient = Patient::find($id);

        return view('admin.patient.edit',[
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
        $patient->tgl_lahir = Carbon::create($request->tgl_lahir);
        $patient->umur = $request->umur;
        $patient->pekerjaan = $request->pekerjaan;
        $patient->status = $request->status;
        $patient->jenkel = $request->jenkel;
        $patient->no_antrian = $request->no_antrian;
        $patient->save();

        return redirect()->route('admin.patient.index')->withSuccess('Berhasil ditambahkan');
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
        return redirect()->route('admin.patient.index')->with('danger','Berhasil dihapus');
    }
}
