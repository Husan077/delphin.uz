<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banners;
use App\Models\Beautifuladdres;
use App\Models\Customerfeedback;
use App\Models\Customerimages;
use App\Models\Faqs;
use App\Models\Locations;
use App\Models\Ourcompanys;
use App\Models\Results;
use App\Models\Setting;
use App\Models\Tripsdetails;
use App\Models\Whyus;

class AdminController extends Controller
{
    public function index()
    {
        $banners = count(Banners::all());
        $tripsdetails = count(Tripsdetails::all());
        $beautifuladdres = count(Beautifuladdres::all());
        $resluts = count(Results::all());
        $customerimages = count(Customerimages::all());
        $customerfeedbacks = count(Customerfeedback::all());
        $ourcompanys = count(Ourcompanys::all());
        $whyus = count(Whyus::all());
        $faqs = count(Faqs::all());
        $locations = count(Locations::all());
        $setting = count(Setting::all());

//        $about = count(About::all());

        return view('admin.index', compact('banners', 'tripsdetails', 'beautifuladdres', 'resluts',
            'customerimages', 'customerfeedbacks', 'ourcompanys', 'whyus', 'faqs', 'locations', 'setting'));
    }
}
