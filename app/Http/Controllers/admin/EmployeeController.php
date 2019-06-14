<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee; 
// use Carbon\Carbon; 

// use Carbon\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('admin.employee.index',['employees'=>$employees,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::get();

        return view('admin.employee.create',['employee'=>$employees,]);
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
            'nama_pegawai' => 'required',
            'alamat_pegawai' => 'required',
            'email_pegawai' => 'required',
        ],[
            'required' => 'Atribut Harus Di isi',
        ]);

            $employee = new Employee;
            $employee->name_pegawai = $request->nama_pegawai;
            $employee->slug = str_slug($request->nama_pegawai);
            $employee->alamat_pegawai = $request->alamat_pegawai;
            $employee->email_pegawai = $request->email_pegawai;
            $employee->save();

        return redirect()->route('admin.employee.index')->withSuccess('Employee Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Employee::get($id);
        return view('admin.employee.edit',[
            'employee'=>$employees,
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
        $employee = Employee::find($id);

        return view('admin.employee.edit', ['employee' => $employee]);
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
            'nama_pegawai' => 'required',
            'alamat_pegawai' => 'required',
            'email_pegawai' => 'required',
        ]);

        $employee = Employee::find($id);
        $employee->name_pegawai = $request->nama_pegawai;
        $employee->alamat_pegawai = $request->alamat_pegawai;
        $employee->email_pegawai = $request->email_pegawai;
        $employee->save();

        return redirect()->route('admin.employee.index')->withSuccess('Data Berhasil Update');
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
        return redirect()->route('admin.employee.index')->with('danger','Berhasil Dihapus');
    }
}
