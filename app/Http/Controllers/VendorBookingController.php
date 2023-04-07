<?php

namespace App\Http\Controllers;

use App\Booking_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorBookingController extends Controller
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
        $data = Booking_request::select('booking_requests.*')->join('vendor_services','vendor_services.id','=','booking_requests.vservice_id')->where('vendor_services.vendor_id','=',session('vendor_id'))->orderBy('booking_requests.created_at','desc')->get();
        return view('vendor.allbooking')->with('data',$data);
    }
    public function pending()
    {
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $data = Booking_request::select('booking_requests.*')->join('vendor_services','vendor_services.id','=','booking_requests.vservice_id')->where('vendor_services.vendor_id','=',session('vendor_id'))->where('booking_requests.status','=','PENDING')->orderBy('booking_requests.created_at','desc')->get();
        return view('vendor.pendingbooking')->with('data',$data);
    }
    public function accepted()
    {
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $data = Booking_request::select('booking_requests.*')->join('vendor_services','vendor_services.id','=','booking_requests.vservice_id')->where('vendor_services.vendor_id','=',session('vendor_id'))->where('booking_requests.status','=','ACCEPTED')->orderBy('booking_requests.created_at','desc')->get();
        return view('vendor.acceptedbooking')->with('data',$data);
    }
    public function completed()
    {
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $data = Booking_request::select('booking_requests.*')->join('vendor_services','vendor_services.id','=','booking_requests.vservice_id')->where('vendor_services.vendor_id','=',session('vendor_id'))->where('booking_requests.status','=','COMPLETED')->orderBy('booking_requests.created_at','desc')->get();
        return view('vendor.completedbooking')->with('data',$data);
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
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $data = Booking_request::find($id);
        return view('vendor.editpending')->with('data',$data);
    }
    public function editaccepted($id)
    {
        if(!session('vendor_name'))
        {
            return redirect('vendor/login');
        }
        $data = Booking_request::find($id);
        return view('vendor.editaccepted')->with('data',$data);
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
            $data = Booking_request::find($id);
            $data->status = $request->get('status');
            $data->save();
            DB::commit();
            return redirect('vendor/pendingbooking')->with('success','Data Updated');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('vendor/pendingbooking')->with('error','Try Again'.$th->getMessage());
        }
    }
    public function updateaccepted(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = Booking_request::find($id);
            $data->status = $request->get('status');
            $data->save();
            DB::commit();
            return redirect('vendor/acceptedbooking')->with('success','Data Updated');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('vendor/acceptedbooking')->with('error','Try Again'.$th->getMessage());
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
