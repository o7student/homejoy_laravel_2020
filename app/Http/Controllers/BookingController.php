<?php

namespace App\Http\Controllers;

use App\Booking_request;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('status','=','ACTIVE')->get();
        $data = Booking_request::where('user_id','=',Auth::user()->id)->get();
        return view('mybooking')->with('category',$category)->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $category = Category::where('status','=','ACTIVE')->get();
        return view('booking')->with('data',$id)->with('category',$category);
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
            $data = new Booking_request([
                'user_id'           => Auth::user()->id,
                'booking_name'      => strtoupper($request->get('booking_name')),
                'booking_email'     => $request->get('booking_email'),
                'booking_contact'   => $request->get('booking_contact'),
                'booking_address'   => $request->get('booking_address'),
                'booking_description'   => $request->get('booking_description'),
                'booking_date'   => $request->get('booking_date'),
                'booking_time'   => $request->get('booking_time'),
                'vservice_id'   => $request->get('vservice_id'),
                'status'        => 'PENDING'
            ]);
            $data->save();
            DB::commit();
            return redirect('mybooking')->with('success','Thank You For Booking');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('mybooking')->with('error','Try Again'.$th->getMessage());
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
