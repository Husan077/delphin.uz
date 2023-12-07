<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use App\Models\Tripsdetails;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $tripsdetails = Tripsdetails::all();
        $faqs = Faqs::all();
        $headerdetails = Tripsdetails::limit(7)->get();
        return view('site.faqs', compact("tripsdetails", "faqs", 'headerdetails'));
    }
}
