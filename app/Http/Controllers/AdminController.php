<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;

class AdminController extends Controller
{
    public function adminHome(Request $request){
        $id = Auth::admin()->id;
        $request->session()->put('id', $id);
    }
}
