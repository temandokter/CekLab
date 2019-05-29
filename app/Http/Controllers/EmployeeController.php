<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::get();

        return view('index',['employee'=>$employee,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
            'nama_pegawai' => 'required|min:5',
            'alamat_pegawai' => 'required',
            'email_pegawai' => 'required',
        ]);

        $employee = New Employee;
        $employee->nama_pegawai = $request->nama_pegawai;
        $employee->alamat_pegawai = $request->alamat_pegawai;
        $employee->email_pegawai = $request->email_pegawai;
        $employee->save();

        return redirect()->route('employee.category.index')->withSuccess('Berhasil ditambahkan');
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
        $employee = Employee::find($id);

        return view('employee.edit',['employee'=>$employee,]);
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
            'nama_pegawai' => 'required|min:5',
            'alamat_pegawai' => 'required',
            'email_pegawai' => 'required',
        ]);

        $employee = New Employee;
        $employee->nama_pegawai = $request->nama_pegawai;
        $employee->alamat_pegawai = $request->alamat_pegawai;
        $employee->email_pegawai = $request->email_pegawai;
        $employee->save();

        return redirect()->route('employee.category.index')->withSuccess('Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('danger','Berhasil dihapus');
    }
}
