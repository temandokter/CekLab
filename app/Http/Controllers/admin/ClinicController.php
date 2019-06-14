<?php

namespace App\Http\Controllers\admin;
use App\Doctor;
use App\Clinic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinics = Clinic::latest()->paginate(10);
        return view('admin.clinic.index',
        ['clinics'=>$clinics,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinics = Clinic::get();
        return view('admin.clinic.create',[
            'clinics'=>$clinics,
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
            'nama_klinik' => 'required|min:3',
            'alamat_klinik' => 'required'
        ],[
            'required' => 'Atribut harus diisi',
        ]);

        $clinic = new Clinic;
        $clinic->nama_klinik = $request->nama_klinik;
        $clinic->slug = str_slug($request->nama_klinik);
        $clinic->alamat_klinik = $request->alamat_klinik;
        $clinic->save();

        return redirect()->route('admin.clinic.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinic = Clinic::get();
        return view('admin.clinic.index',[
            'clinic' => $clinic,
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
        $clinic = Clinic::find($id);

        return view('admin.clinic.edit',[
            'clinic'=>$clinic,
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
        $this->validate($request,[
            'nama_klinik' => 'required|min:3',
            'alamat_klinik' => 'required'
        ],[
            'required' => 'Atribut harus diisi',
        ]);

        $clinic = Clinic::find($id);
        $clinic->nama_klinik = $request->nama_klinik;
        $clinic->slug = str_slug($request->nama_klinik);
        $clinic->alamat_klinik = $request->alamat_klinik;
        $clinic->save();

        return redirect()->route('admin.clinic.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clinic = Clinic::find($id);
        $clinic->delete();
        return redirect()->route('admin.clinic.index')->with('danger', 'Berhasil dihapus');
    }
}
