<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\User;
use Illuminate\Routing\RouteRegistrar;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = Register::get();

        return view('dashboard.user' , compact ('data'));
    }
    public function indexEditUser($id){
        $data = Register::where('id', $id)->first();
        return view ('dashboard.edit-user', compact('data'));
    }
    public function updateIndex(Request $request, $id){
        Register::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address

        ]);
        return redirect(Route('indexUser'));
    }

    public function destory($id)
    {
        User::where('id', $id)->delete();
        return redirect('/user');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        return redirect('/login');
    }
}
