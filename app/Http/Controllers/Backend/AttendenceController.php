<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendence; 
use App\Models\Employee; 
use Carbon\Carbon;

class AttendenceController extends Controller
{
    public function EmployeeAttendenceList(){

        $allData = Attendence::orderBy('id','desc')->get();
        return view('backend.attendence.view_employee_attend',compact('allData'));

    } // End Method 

    public function AddEmployeeAttendence(){
        $employees = Employee::all();
        return view('backend.attendence.add_employee_attend',compact('employees'));
    }// End Method 


}
 