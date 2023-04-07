<?php

namespace App\Http\Controllers;

use App\Category;
use App\Vendor_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorServiceController extends Controller
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
        $data = Vendor_service::all();
        return view('vendor.viewvservice')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $category = Category::where('status','=','ACTIVE')->get();
        return view('vendor.addvservice')->with('category',$category);
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
            $data = new Vendor_service([
                'service_id'      => $request->get('service_id'),
                'vendor_id'       => session('vendor_id'),
                'category_id'     => $request->get('category_id'),
                'description'     => $request->get('description'),
                'charges'         => $request->get('charges'),
                'status'          => 'ACTIVE'
            ]);
            $data->save();
            DB::commit();
            return redirect('vendor/addvservice')->with('success','Data Added..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('vendor/addvservice')->with('error','Try Again..!'.$th->getMessage());
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
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $data = Vendor_service::find($id);
        $category = Category::where('status','=','ACTIVE')->get();
        return view('vendor.editvservice')->with('data',$data)->with('category',$category);
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
            $data = Vendor_service::find($id);
                $data->description   =$request->get('description');
                $data->charges   =$request->get('charges');
                $data->service_id   =$request->get('service_id');
                $data->status = $request->get('status');
            $data->save();
            DB::commit();
            return redirect('vendor/viewvservice')->with('success','Data Update..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('vendor/viewvservice')->with('error','Try Again..!'.$th->getMessage());
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
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        DB::beginTransaction();
        try {
            $data = Vendor_service::find($id);
            $data->delete();
            DB::commit();
            return redirect('vendor/viewvservice')->with('success','Data Delete..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('vendor/viewvservice')->with('error','Try Again..!'.$th->getMessage());
        }
    }
}
