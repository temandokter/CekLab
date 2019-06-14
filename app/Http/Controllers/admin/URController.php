<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Patient;
use App\ur_tract;
use Illuminate\Http\Request;

class URController extends Controller
{
    public function index(){
        $ur_tracts = ur_tract::latest()->paginate(10);
        return view('admin.ur_tracts.index',
        ['ur_tracts'=>$ur_tracts,]);
    }

    public function create()
    {
        $patients = Patient::get();
        return view('admin.ur_tracts.create',[
            'patients'=>$patients,
        ]);
    }

    public function store(Request $request)
    {
        

        $ur_tract = new ur_tract;
        $ur_tract->swabmulut = $request->swabmulut ? 1 : 0 ?? 0;
        $ur_tract->swabtenggorokan = $request->swabtenggorokan ? 1 : 0 ?? 0;
        $ur_tract->save();

        return redirect()->route('admin.ur_tracts.index')->withSuccess('Berhasil ditambahkan');
    }

    public function show($id)
    {
        $ur_tract = ur_tract::get();
        return view('admin.ur_tracts.index',[
            'ur_tract' => $ur_tract,
        ]);
    }

    public function edit($id)
    {
        $ur_tract = ur_tract::find($id);

        return view('admin.ur_tracts.edit',[
            'ur_tract'=>$ur_tract,
        ]);
    }

    public function update(Request $request, $id)
    {
        $ur_tract = ur_tract::find($id);
        $ur_tract->swabmulut = $request->swabmulut ? 1 : 0 ?? 0;
        $ur_tract->swabtenggorokan = $request->swabtenggorokan ? 1 : 0 ?? 0;
        $ur_tract->save();

        return redirect()->route('admin.ur_tracts.index')->withSuccess('Berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $ur_tract = ur_tract::find($id);
        $ur_tract->delete();
        return redirect()->route('admin.ur_tracts.index')->with('danger','Berhasil dihapus');
    }
}
