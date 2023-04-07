<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminServiceController extends Controller
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
        $data = Service::all();
        return view('admin.viewservice')->with('data',$data);
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
        $category = Category::where('status','=','ACTIVE')->get();
        return view('admin.addservice')->with('category',$category);
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
            $data = new Service([
                'name'      => strtoupper($request->get('name')),
                'category_id'      => $request->get('category_id'),
                'description'      => $request->get('description'),
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
            return redirect('admin/addservice')->with('success','Data Added..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/addservice')->with('error','Try Again..!'.$th->getMessage());
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
        $data = Service::find($id);
        $category = Category::where('status','=','ACTIVE')->get();
        return view('admin.editservice')->with('data',$data)->with('category',$category);
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
            $data = Service::find($id);
                $data->name     = strtoupper($request->get('name'));
                $data->description   =$request->get('description');
                $data->category_id   =$request->get('category_id');
                $data->status = $request->get('status');
            if($request->hasFile('pic'))
            {
                $pic = $request->file('pic');
                $picname = time().$pic->getClientOriginalName();
                $pic->storeAs('public/images', $picname);
                $data->pic = $picname;
            }
            $data->save();
            DB::commit();
            return redirect('admin/viewservice')->with('success','Data Update..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/viewservice')->with('error','Try Again..!'.$th->getMessage());
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
            $data = Service::find($id);
            $data->delete();
            DB::commit();
            return redirect('admin/viewservice')->with('success','Data Delete..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/viewservice')->with('error','Try Again..!'.$th->getMessage());
        }
    }
}