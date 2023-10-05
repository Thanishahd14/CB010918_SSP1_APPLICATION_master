<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Product;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userview()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            $data=user::all();
        return view("admin.user",compact("data"));
        }
        else
        {
            return abort(403,"Unauthorized Access");
        }
        
    }

    public function productview()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            $data=product::all();
        return view("admin.product",compact("data"));
        }
        else
        {
            return abort(403,"Unauthorized Access");
        }
        
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function addproduct(Request $request)
    {
        $data=new product;
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('productimg',$imagename);

        $data->image=$imagename;

        $data->name=$request->name;

        $data->price=$request->price;

        $data->save();

        return redirect()->back();
    }

    public function updateproductview($id)
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            $data=product::find($id);
            return view("admin.updateproductview",compact("data"));   
        }
        else
        {
            return abort(403,"Unauthorized Access");
        }
    }

    public function updateuserview($id)
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            $data=user::find($id);
        return view("admin.updateuserview",compact("data"));
        }
        else
        {
            return abort(403,"Unauthorized Access");
        }
        
    }

    public function updateproduct($id, Request $request)
    {
        $data=product::find($id);
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('productimg',$imagename);

        $data->image=$imagename;

        $data->name=$request->name;

        $data->price=$request->price;

        $data->save();

        return redirect()->back();
    }

    public function userupdate( Request $request, $id)
    {
        $data=user::find($id);

        $data->name=$request->name;

        $data->usertype=$request->usertype;

        $data->save();

        return redirect()->back();
    }


}
