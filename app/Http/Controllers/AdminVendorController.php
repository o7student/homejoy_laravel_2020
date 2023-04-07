<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminVendorController extends Controller
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
        $data = Vendor::all();
        return view('admin.viewvendor')->with('data',$data);
    }
    public function register()
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $data = Vendor::where('status','=','PENDING')->get();
        return view('admin.registervendor')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        return view('admin.addvendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = new Vendor([
                'name'      => strtoupper($request->get('name')),
                'password'      => md5($request->get('password')),
                'email'      => $request->get('email'),
                'address'      => $request->get('address'),
                'phone'      => $request->get('phone'),
                'document_number'      => $request->get('document_number'),
                'document_type'      => $request->get('document_type'),
                'status'        => 'ACTIVE'
            ]);
            if($request->hasFile('pic'))
            {
                $pic = $request->file('pic');
                $picname = time().$pic->getClientOriginalName();
                $pic->storeAs('public/images', $picname);
                $data->pic = $picname;
            }
            $data->save();
            DB::commit();
            return redirect('admin/addvendor')->with('success','Data Added..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/addvendor')->with('error','Try Again..!'.$th->getMessage());
        }
        
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
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $data = Vendor::find($id);
        return view('admin.editvendor')->with('data',$data);
    }
    public function editvendor($id)
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $data = Vendor::find($id);
        return view('admin.checkvendor')->with('data',$data);
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
                $data->name     = strtoupper($request->get('name'));
                $data->address   =$request->get('address');
                $data->email   =$request->get('email');
                $data->phone   =$request->get('phone');
                $data->document_type   =$request->get('document_type');
                $data->document_number   =$request->get('document_number');
                $data->status = $request->get('status');
            if($request->hasFile('pic'))
            {
                $pic = $request->file('pic');
                $picname = time().$pic->getClientOriginalName();
                $pic->storeAs('public/images', $picname);
                $data->pic = $picname;
            }
            if($request->hasFile('pic'))
            {
                $data->password = md5($request->get('password'));
            }
            $data->save();
            DB::commit();
            return redirect('admin/viewvendor')->with('success','Data Update..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/viewvendor')->with('error','Try Again..!'.$th->getMessage());
        }
    }
    public function checkvendor(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = Vendor::find($id);
                $data->status = $request->get('status');
            $data->save();
            DB::commit();
            return redirect('admin/registervendor')->with('success','Data Updated..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/registervendor')->with('error','Try Again..!'.$th->getMessage());
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
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        DB::beginTransaction();
        try {
            $data = Vendor::find($id);
            $data->delete();
            DB::commit();
            return redirect('admin/viewvendor')->with('success','Data Delete..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/viewvendor')->with('error','Try Again..!'.$th->getMessage());
        }
    }
}