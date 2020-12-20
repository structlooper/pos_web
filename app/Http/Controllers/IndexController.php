<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class IndexController extends Controller
{
    //

    public function index(){
        $data['cat_banner'] = DB::table('sma_primary_banner')
            ->get();
        $data['brand_banner'] = DB::table('sma_secondary_banner')
            ->get();
        $data['offer_banner'] = DB::table('sma_offers')
            ->inRandomOrder()
            ->limit(3)
            ->get();
         $cat = DB::table('sma_categories')
            ->where('parent_id',0)
            ->orwhere('parent_id',null)
            ->get();

        $data['cat'] = $cat;
        return view('index')->with($data);
    }
    public function login(Request $request){
        $phone = $request->phone;
        $Authorization = $request->Authorization;
        $login = DB::table('sma_users')
            ->where('phone',$phone)
            ->first();
        $user_data['user_id'] =  $login->id;
        $user_data['first_name'] =  $login->first_name;
        $user_data['last_name'] =  $login->last_name;
        $user_data['phone'] =  $login->phone;
        $user_data['token'] =  $Authorization;
        Session::put('user_data', $user_data);
        if(Session::has('user_data')){
            return ['status' => true,'msg' => 'login success' , 'data' => $user_data];

        }else{
            return ['status' => false,'msg' => 'login error' , 'data' => []];

        }
    }
    public function logout(){
        Session::forget('user_data');
        return back()->with('flash_success','user logout successfully');
    }
    public function error_not(){

        return view('notfound');
    }
}
