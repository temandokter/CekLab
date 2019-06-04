<?php

namespace App\Http\Controllers\admin;
use App\Clinical_infos;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClinicalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinfos = Clinical_infos::latest()->paginate(10);
        return view('admin.cinfo.index',
        ['cinfos'=>$cinfos,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::get();
        return view('admin.cinfo.create',[
            'patients'=>$patients,
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
        

        $cinfo = new Clinical_infos;
        $cinfo->paska_bedah = $request->paska_bedah ? 1 : 0 ?? 0;
        $cinfo->immunokompromise = $request->immunokompromise ? 1 : 0 ?? 0;
        $cinfo->ventilator = $request->ventilator ? 1 : 0 ?? 0;
        $cinfo->transplantasi = $request->transplantasi ? 1 : 0 ?? 0;
        $cinfo->kehamilan = $request->kehamilan ? 1 : 0 ?? 0;
        $cinfo->diabetik = $request->diabetik ? 1 : 0 ?? 0;
        $cinfo->pid = $request->pid ? 1 : 0 ?? 0;
        $cinfo->alergi_penicilin = $request->alergi_penicilin ? 1 : 0 ?? 0;
        $cinfo->riwayat_msrsa = $request->riwayat_mrsa ? 1 : 0 ?? 0;
        $cinfo->gejala_isk = $request->gejala_isk ? 1 : 0 ?? 0;
        $cinfo->id_pasien = $request->id_pasien;
        $cinfo->save();

        return redirect()->route('admin.cinfo.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cinfo = Clinical_infos::get();
        return view('admin.cinfo.index',[
            'cinfo' => $cinfo,
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
        $cinfo = Clinical_infos::find($id);

        return view('admin.cinfo.edit',[
            'cinfo'=>$cinfo,
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
        $cinfo = Clinical_infos::find($id);
        $cinfo->paska_bedah = $request->paska_bedah ? 1 : 0 ?? 0;
        $cinfo->immunokompromise = $request->immunokompromise ? 1 : 0 ?? 0;
        $cinfo->ventilator = $request->ventilator ? 1 : 0 ?? 0;
        $cinfo->transplantasi = $request->transplantasi ? 1 : 0 ?? 0;
        $cinfo->kehamilan = $request->kehamilan ? 1 : 0 ?? 0;
        $cinfo->diabetik = $request->diabetik ? 1 : 0 ?? 0;
        $cinfo->pid = $request->pid ? 1 : 0 ?? 0;
        $cinfo->alergi_penicilin = $request->alergi_penicilin ? 1 : 0 ?? 0;
        $cinfo->riwayat_msrsa = $request->riwayat_mrsa ? 1 : 0 ?? 0;
        $cinfo->gejala_isk = $request->gejala_isk ? 1 : 0 ?? 0;
        $cinfo->id_pasien = $request->id_pasien;
        $cinfo->save();

        return redirect()->route('admin.cinfo.index')->withSuccess('Berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cinfo = Clinical_infos::find($id);
        $cinfo->delete();
        return redirect()->route('admin.cinfo.index')->with('danger','Berhasil dihapus');
    }
}
