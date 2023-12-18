<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Tripsdetails;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function index()
    {
        $headerdetails = Tripsdetails::limit(7)->get();
        $tripsdetails = Tripsdetails::paginate(12);
        return view('site.trips', compact("tripsdetails", 'headerdetails'));
    }

    public function detail(Tripsdetails $slug)
    {
        $tripsdetails = Tripsdetails::all();
        $headerdetails = Tripsdetails::limit(7)->get();

        return view('site.tripsdetail', compact("slug", "tripsdetails", 'headerdetails'));
    }


    public function clickSend(Request $request)
    {
        return redirect()->to(
            "https://my.click.uz/services/pay?service_id=$request->service_id&merchant_id=$request->merchant_id&amount=$request->amount&transaction_param=$request->trip_id&return_url=$request->return_url");
    }
}
