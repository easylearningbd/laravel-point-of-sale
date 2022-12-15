<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function AllEmployee(){

        $employee = Employee::latest()->get();
        return view('backend.employee.all_employee',compact('employee'));
    } // End Method 

    public function AddEmployee(){
        return view('backend.employee.add_employee');
    } // End Method 


    public function StoreEmployee(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|unique:employees|max:200',
            'phone' => 'required|max:200',
            'address' => 'required|max:400',
            'salary' => 'required|max:200',
            'vacation' => 'required|max:200', 
            'experience' => 'required', 
            'image' => 'required',  
        ],
        
        [
            'name.required' => 'This Employee Name Field Is Required',
        ]

    );
 
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/employee/'.$name_gen);
        $save_url = 'upload/employee/'.$name_gen;

        Employee::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'vacation' => $request->vacation,
            'city' => $request->city,
            'image' => $save_url,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Employee Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification); 
    } // End Method 



    public function EditEmployee($id){

        $employee = Employee::findOrFail($id);
        return view('backend.employee.edit_employee',compact('employee'));

    } // End Method 



    public function UpdateEmployee(Request $request){

        $employee_id = $request->id;

        if ($request->file('image')) {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/employee/'.$name_gen);
        $save_url = 'upload/employee/'.$name_gen;

        Employee::findOrFail($employee_id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'vacation' => $request->vacation,
            'city' => $request->city,
            'image' => $save_url,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Employee Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification); 
             
        } else{

            Employee::findOrFail($employee_id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'vacation' => $request->vacation,
            'city' => $request->city, 
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Employee Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification); 

        } // End else Condition  


    } // End Method 


    public function DeleteEmployee($id){

        $employee_img = Employee::findOrFail($id);
        $img = $employee_img->image;
        unlink($img);

        Employee::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Employee Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    } // End Method 




}
 