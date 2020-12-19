<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use View;

class Controller extends BaseController
{
    public function __construct()
    {
        $data['image_url'] = 'https://tbosmartmart.com/pos/';
        $data['logo_url'] = 'https://tbosmartmart.com/pos/themes/default/shop/assets/images/thebestone_logo.png';
        $data['site_settings'] = DB::table('sma_settings')
            ->first();
        $data['categories'] = DB::table('sma_categories')
            ->where('parent_id',0)
            ->orwhere('parent_id',null)
            ->inRandomOrder()
            ->limit(6)
            ->get();

        View::share('data', $data);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
