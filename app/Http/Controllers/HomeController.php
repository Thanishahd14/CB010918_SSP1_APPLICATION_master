<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data=product::all();
        return view("home",compact("data"));
    }

    public function redirects()
    {
        $data=Auth::user()->usertype;
        if($data==1)
        {
            return view("admin.adminhome");
        }
        else
        {
            $data=product::all();
        return view("home",compact("data"));
        }
    }
}
