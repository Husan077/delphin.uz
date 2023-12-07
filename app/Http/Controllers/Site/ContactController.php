<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Locations;
use App\Models\Tripsdetails;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $tripsdetails = Tripsdetails::all();
        $locations = Locations::all();
        $headerdetails = Tripsdetails::limit(7)->get();
        return view('site.contact', compact("tripsdetails", "locations", 'headerdetails'));
    }
}
