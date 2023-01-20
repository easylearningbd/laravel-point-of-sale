<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
     public function AdminDestroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

         $notification = array(
            'message' => 'Admin Logout Successfully',
            'alert-type' => 'info'
        );


        return redirect('/logout')->with($notification);
    } // End Method 


    public function AdminLogoutPage(){

        return view('admin.admin_logout');

    }// End Method 



    public function AdminProfile(){

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
    }// End Method 


    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('upload/admin_image/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/admin_image'),$filename);
           $data['photo'] = $filename;
        }
            
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method 


    public function ChangePassword(){
        return view('admin.change_password');
    }// End Method 



    public function UpdatePassword(Request $request){

        /// Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',

        ]);

        /// Match The Old Password 
        if (!Hash::check($request->old_password, auth::user()->password)) {

             $notification = array(
            'message' => 'Old Password Dones not Match!!',
            'alert-type' => 'error'
             ); 
            return back()->with($notification);
           
        }

        //// Update The New Password 

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

            $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
             ); 
            return back()->with($notification);

    }// End Method 

   /////////////////// Admin User All Method /////////////


    public function AllAdmin(){

        $alladminuser = User::latest()->get();
        return view('backend.admin.all_admin',compact('alladminuser'));
    }// End Method 

    public function AddAdmin(){

        $roles = Role::all();
        return view('backend.admin.add_admin',compact('roles'));
    }// End Method 


    public function StoreAdmin(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => 'New Admin User Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);  

    }// End Method 


    public function EditAdmin($id){

        $roles = Role::all();
        $adminuser = User::findOrFail($id);
        return view('backend.admin.edit_admin',compact('roles','adminuser'));

    }// End Method 


    public function UpdateAdmin(Request $request){

        $admin_id = $request->id;

        $user = User::findOrFail($admin_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone; 
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => 'Admin User Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);  

    }// End Method 



    public function DeleteAdmin($id){

        $user = User::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }

        $notification = array(
            'message' => 'Admin User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method 

     //////////////// Database Backup Method //////////////////

    public function DatabaseBackup(){

        return view('admin.db_backup')->with('files',File::allFiles(storage_path('/app/Easy')));

    }// End Method 


    public function BackupNow(){
        \Artisan::call('backup:run');

          $notification = array(
            'message' => 'Database Backup Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method 
  

    public function DownloadDatabase($getFilename){

        $path = storage_path('app\Easy/'.$getFilename);
        return response()->download($path);

    }// End Method 

    public function DeleteDatabase($getFilename){

        Storage::delete('Easy/'.$getFilename);

         $notification = array(
            'message' => 'Database Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method 


}
 