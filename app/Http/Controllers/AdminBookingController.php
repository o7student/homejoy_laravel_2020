<?php

namespace App\Http\Controllers;

use App\Booking_request;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
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
        $data = Booking_request::latest()->get();
        return view('admin.allbooking')->with('data',$data);
    }
    public function pending()
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $data = Booking_request::where('status','=','PENDING')->latest()->get();
        return view('admin.pendingbooking')->with('data',$data);
    }
    public function accepted()
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $data = Booking_request::where('status','=','ACCEPTED')->latest()->get();
        return view('admin.acceptedbooking')->with('data',$data);
    }
    public function completed()
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $data = Booking_request::where('status','=','COMPLETED')->latest()->get();
        return view('admin.completedbooking')->with('data',$data);
    }
    public function cancelled()
    {
        if(!session('admin_name'))
        {
            return redirect('admin/login');
        }
        $data = Booking_request::where('status','=','cancelled')->latest()->get();
        return view('admin.cancelledbooking')->with('data',$data);
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
