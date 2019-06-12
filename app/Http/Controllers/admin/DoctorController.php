<?php

namespace App\Http\Controllers\admin;
use App\Doctor;
use App\Patient;
use App\Clinic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::latest()->paginate(10);
        return view('admin.doctor.index',['doctors'=>$doctors,]);
    }

    /**
     * Show the form for creating 
     * a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::get();
        $clinics = Clinic::get();
        return view('admin.doctor.create',[
            'patients'=>$patients,
        ],['clinics'=>$clinics,
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
        $this->validate($request, [
            'nama_dokter' => 'required|min:3',
            'no_hp' => 'required',
            'email' => 'required|min:3'
        ],[
            'required' => 'Atribut harus diisi',
        ]);

        $doctor = new Doctor;
        $doctor->nama_dokter = $request->nama_dokter;
        $doctor->slug = str_slug($request->nama_dokter);
        $doctor->no_hp = $request->no_hp;
        $doctor->email = $request->email;
        $doctor->patient_id = $request->patient_id;
        $doctor->clinic_id = $request->clinic_id;
        $doctor->save();

        

        return redirect()->route('admin.cinfo.create')->withSuccess('Berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctors = Doctor::get();
        return view('admin.doctor.index',[
            'doctor'=>$doctors,
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
        $doctor = Doctor::find($id);
        
        return view('admin.doctor.edit',[
            'doctor'=>$doctor,
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
            'nama_dokter' => 'required|min:3',
            'no_hp' => 'required',
            'email' => 'required|min:3'
        ],[
            'required' => 'Atribut harus diisi',
        ]);

        $doctor = Doctor::find($id);
        $doctor->nama_dokter = $request->nama_dokter;
        $doctor->slug = str_slug($request->nama_dokter);
        $doctor->no_hp = $request->no_hp;
        $doctor->email = $request->email;
        $doctor->patient_id = $request->patient_id;
        $doctor->clinic_id = $request->clinic_id;
        $doctor->save();

        

        return redirect()->route('admin.doctor.index')->withSuccess('Berhasil ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('admin.doctor.index')->with('danger','Berhasil dihapus');
    }
}
