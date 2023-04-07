<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoryController extends Controller
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
        $data = Category::all();
        return view('admin.viewcategory')->with('data',$data);
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
        return view('admin.addcategory');
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
            $data = new Category([
                'name'      => strtoupper($request->get('name')),
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
            return redirect('admin/addcategory')->with('success','Data Added..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/addcategory')->with('error','Try Again..!'.$th->getMessage());
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
        $data = Category::find($id);
        return view('admin.editcategory')->with('data',$data);
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
            $data = Category::find($id);
                $data->name     = strtoupper($request->get('name'));
                $data->description   =$request->get('description');
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
            return redirect('admin/viewcategory')->with('success','Data Update..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/viewcategory')->with('error','Try Again..!'.$th->getMessage());
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
            $data = Category::find($id);
            $data->delete();
            DB::commit();
            return redirect('admin/viewcategory')->with('success','Data Delete..!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('admin/viewcategory')->with('error','Try Again..!'.$th->getMessage());
        }
    }
}
