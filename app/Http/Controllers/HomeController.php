<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_information;
use Auth;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        $user_inf=user_information::where('id',Auth::user()->id)->get();
        // dd($user_inf[0]);
        return view('User.profile',[
            "user_inf"=>$user_inf[0],
        ]);
    }
    public function edit()
    {
        return view('User.edit');
    }
    public function edited(Request $request)
    {
        $user_inf = new user_information;
        $user_inf->id=Auth::user()->id;
        $user_inf->name = $request["name"];
        $user_inf->surname = $request["surname"];
        $user_inf->image = $request->get("image");
        $user_inf->sex = $request["sex"];
        $user_inf->country = $request["Country"];
        $user_inf->birth_date = $request["Birth"];
        $user_inf->description = $request["Description"];
        $user_inf->saveOrFail();

        return view('User.profile',
        [
            'user_inf'=>$user_inf,
        ]);
    }
}
