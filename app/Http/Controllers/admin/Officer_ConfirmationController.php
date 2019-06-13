<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Officer_Confirmation;
use App\Patient;

class Officer_ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::get();
        $officer_confirmations = Officer_Confirmation::paginate(10);
        return view('admin.officer_confirmation.index', ['officer_confirmation'=>$officer_confirmations,]);
    }
}
