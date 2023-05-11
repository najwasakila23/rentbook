<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messege;
 
class MessegeController extends Controller
{
    public function storeMessege(Request $request){
        $request->validate([
            'name' => 'required',
            'messege' => 'required',
        ]);
        Messege::create($request->all());
        return redirect('/');
    }
}
