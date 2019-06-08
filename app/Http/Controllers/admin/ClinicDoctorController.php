<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clinic;

class ClinicDoctorController extends Controller
{
    public function index(Clinic $clinic)
    {
            return view('admin.doctor.doctor-by-clinic',
        [
            'clinic' => $clinic,
            'doctors' => $clinic->doctor()->paginate(10),
        ]);
    }
}
