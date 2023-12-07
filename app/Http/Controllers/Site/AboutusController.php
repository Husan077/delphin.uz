<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Customerfeedback;
use App\Models\Locations;
use App\Models\Ourcompanys;
use Illuminate\Http\Request;
use App\Models\Tripsdetails;
use App\Models\Whyus;

class AboutusController extends Controller
{
    public function index()
    {
        $tripsdetails = Tripsdetails::all();
        $ourcompanys = Ourcompanys::limit(3)->get();
        $whyus = Whyus::all();
        $customerfeedbacks = Customerfeedback::all();
        $headerdetails = Tripsdetails::limit(7)->get();
        $locations = Locations::all();
        return view('site.aboutus', compact("tripsdetails", "ourcompanys", "whyus", "customerfeedbacks", 'headerdetails', 'locations'));
    }

}
