<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
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
            $data->password = $request->password;
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
}
