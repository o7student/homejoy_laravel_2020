<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $category = Category::where('status','=','ACTIVE')->count();
        $service = Service::where('status','=','ACTIVE')->count();
        $vendor = Vendor::where('status','=','ACTIVE')->count();
        $user = User::where('status','=','ACTIVE')->count();
        return view('vendor.index')->with('category',$category)->with('service',$service)->with('vendor',$vendor)->with('user',$user);
    }
    public function login()
    {
        return view('vendor.login');
    }
    public function authenticate(Request $request)
    {
        $email = $request->get('email');
        $password = md5($request->get('password'));
        $data = Vendor::where('email','=',$email)->where('password','=',$password)->count();
        if($data>0)
        {
            $vendor = Vendor::where('email','=',$email)->where('password','=',$password)->first();
            session([
                'vendor_name'    => $vendor->name,
                'vendor_email'    => $vendor->email,
                'vendor_phone'    => $vendor->phone,
                'vendor_address'    => $vendor->address,
                'vendor_id'    => $vendor->id
            ]);
            return redirect('vendor');
        }
        else
        {
            return redirect('vendor/login')->with('error','Wrong Email/Password');
        }
    }
    public function logout(){
        session()->forget([
            'vendor_name',
            'vendor_email',
            'vendor_id'
        ]);
        return redirect('vendor/login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Vendor::where('id','=',session('vendor_id'))->first();
        return view('vendor.updateprofile')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = Vendor::find($id);
            $data->email = $request->get('email');
            $data->phone = $request->get('phone');
            $data->address = $request->get('address');
            if(!$request->get('password')==""){
                $data->password = md5($request->get('password'));
            }
            $data->save();
            DB::commit();
            return redirect('vendor/update')->with('success','Profile Updated');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('vendor/update')->with('error','Try Again'.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
