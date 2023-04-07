<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Service;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $category = Category::where('status','=','ACTIVE')->count();
        $service = Service::where('status','=','ACTIVE')->count();
        $vendor = Vendor::where('status','=','ACTIVE')->count();
        $user = User::where('status','=','ACTIVE')->count();
        return view('admin.index')->with('category',$category)->with('service',$service)->with('vendor',$vendor)->with('user',$user);
    }
    public function login()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        $email = $request->get('email');
        $password = md5($request->get('password'));
        $data = Admin::where('email','=',$email)->where('password','=',$password)->count();
        if($data>0)
        {
            $admin = Admin::where('email','=',$email)->where('password','=',$password)->first();
            session([
                'admin_name'    => $admin->name,
                'admin_email'    => $admin->email,
                'admin_id'    => $admin->id
            ]);
            return redirect('admin');
        }
        else
        {
            return redirect('admin/login')->with('error','Wrong Email/Password');
        }
    }
    public function logout(){
        session()->forget([
            'admin_name',
            'admin_email',
            'admin_id'
        ]);
        return redirect('admin/login');
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
    public function edit($id)
    {
        //
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
        //
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
