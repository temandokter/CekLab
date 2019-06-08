<?php

namespace App\Http\Controllers\admin;
use App\Check_labs;
use App\Clinic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChecklabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clabs = Check_labs::latest()->paginate(10);
        return view('admin.clab.index',
        ['clabs'=>$clabs,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinics = Clinic::get();
        return view('admin.clab.create',[
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
        $this->validate($request,[
            'nama_lab' => 'required',
        ],[
            'required' => 'Atribut harus diisi',
        ]);

        $clab = new Check_labs;
        $clab->nama_lab = $request->nama_lab;
        $clab->slug = str_slug($request->nama_lab);
        $clab->id_klinik = $request->id_klinik;
        $clab->save();

        return redirect()->route('admin.clab.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clab = Check_labs::get();
        return view('admin.clab.index',[
            'clab' => $clab,
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
        $clab = Check_labs::find($id);

        return view('admin.clab.edit',[
            'clab'=>$clab,
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
            'nama_lab' => 'required',
        ],[
            'required' => 'Atribut harus diisi',
        ]);

        $clab = Check_labs::find($id);
        $clab->nama_lab = $request->nama_lab;
        $clab->slug = str_slug($request->nama_lab);
        $clab->id_klinik = $request->id_klinik;
        $clab->save();

        return redirect()->route('admin.clab.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clab = Check_labs::find($id);
        $clab->delete();
        return redirect()->route('admin.clab.index')->with('danger','Berhasil dihapus');
    }
}
