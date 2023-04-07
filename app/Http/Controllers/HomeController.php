<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::where('status','=','ACTIVE')->get();
        return view('homes')->with('category',$category);
    }
    public function about()
    {
        $category = Category::where('status','=','ACTIVE')->get();
        return view('about')->with('category',$category);
    }
    public function contact()
    {
        $category = Category::where('status','=','ACTIVE')->get();
        return view('contact')->with('category',$category);
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = new Contact([
                'name'      => strtoupper($request->get('name')),
                'subject'      => strtoupper($request->get('subject')),
                'email'     => $request->get('email'),
                'message'     => $request->get('message')
            ]);
            $data->save();
            DB::commit();
            return redirect('contact')->with('success','Thank You For Contacting');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('contact')->with('error','Try Again'.$th->getMessage());
        }
    }
}
