<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvanceSalary; 
use App\Models\Employee; 
use Carbon\Carbon;

class SalaryController extends Controller
{
    public function AddAdvanceSalary(){

        $employee = Employee::latest()->get();
        return view('backend.salary.add_advance_salary',compact('employee'));

    }// End Method 






}
 