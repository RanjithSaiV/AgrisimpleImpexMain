<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AccountController extends Controller
{
    //
    public function login()
    {
        return view('admin.login');
    }
    public function checkEmail(Request $request)
    {
        $check = Admin::where('email', $request->email)->first();
        if (isset($check->id)) {
            return response()->json([
                'success' => 1,
                'message' => 'Admin Email Found'
            ]);
        } else {
            return response()->json([
                'success' => 0,
                'message' => 'Admin Email Not Found'
            ]);
        }
    }
    public function loginAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => 0,
                'message' => 'Please Check Input Fields'
            ]);
        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect(url('admin/dashboard'));
        } else {
            $data = new Admin();
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->save();
            return response()->json([
                'success' => 0,
                'data'=>'123',
                'message' => 'Incorrect Credentials'
            ]);
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout(Request $request)
    {
        auth('admin')->logout();
        return redirect(route('admin.login'));
    }
    public function changePassword(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if (!isset($admin->id)) {
            return redirect(url('/admin/login'));
        }
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required',
            'c_password' => 'same:password|required'
        ]);
        if ($validator->fails()) {
            Alert::Warning($validator->errors()->first());
            return redirect()->back();
        }
        if (Auth::guard('admin')->attempt(['email' => $admin->email, 'password' => $request->old_password], $request->remember)) {
            if ($request->password == $request->c_password) {
                $admin->password = bcrypt($request->password);
                $admin->save();
                Auth::login($admin);
                Alert::toast('Password Updated Successfully', 'success');
                return redirect(url('/admin/dashboard'));
            } else {
                Alert::toast('Password Mismatch', 'warning');
                return redirect(url('/admin/dashboard'));
            }
        } else {
            Alert::Warning('Old Password Mismatched');
            return redirect()->back();
        }
    }
}
