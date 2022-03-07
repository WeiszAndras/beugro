<?php

namespace App\Http\Controllers;
use App\Production;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function production()
    {
        $production = DB::select('select * from production');
        $products = DB::select('select * from products');

        //views can be returned with data.
        return view('production',
            ['production'=>$production],
            ['products'=>$products]
        );
    }

    public function delete($id) {
        DB::delete('delete from production where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/production">Click Here</a> to go back.';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function center()
    {
        //views can be returned with data.
        return view('center');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        //views can be returned with data.
        return view('about');
    }
}
