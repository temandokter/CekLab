<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Patient;
use App\lr_tract;
use Illuminate\Http\Request;

class LRController extends Controller
{
    public function index(){
        $lr_tracts = lr_tract::latest()->paginate(10);
        return view('admin.lr_tracts.index',
        ['lr_tracts'=>$lr_tracts,]);
    }

    public function create()
    {
        $patients = Patient::get();
        return view('admin.lr_tracts.create',[
            'patients'=>$patients,
        ]);
    }

    public function store(Request $request)
    {
        

        $lr_tract = new lr_tract;
        $lr_tract->swabmulut = $request->swabmulut ? 1 : 0 ?? 0;
        $lr_tract->swabtenggorokan = $request->swabtenggorokan ? 1 : 0 ?? 0;
        $lr_tract->save();

        return redirect()->route('admin.lr_tracts.index')->withSuccess('Berhasil ditambahkan');
    }

    public function show($id)
    {
        $lr_tract = lr_tract::get();
        return view('admin.lr_tracts.index',[
            'lr_tract' => $lr_tract,
        ]);
    }

    public function edit($id)
    {
        $lr_tract = lr_tract::find($id);

        return view('admin.lr_tracts.edit',[
            'lr_tract'=>$lr_tract,
        ]);
    }

    public function update(Request $request, $id)
    {
        $lr_tract = lr_tract::find($id);
        $lr_tract->swabmulut = $request->swabmulut ? 1 : 0 ?? 0;
        $lr_tract->swabtenggorokan = $request->swabtenggorokan ? 1 : 0 ?? 0;
        $lr_tract->save();

        return redirect()->route('admin.lr_tracts.index')->withSuccess('Berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $lr_tract = lr_tract::find($id);
        $lr_tract->delete();
        return redirect()->route('admin.lr_tracts.index')->with('danger','Berhasil dihapus');
    }
}
