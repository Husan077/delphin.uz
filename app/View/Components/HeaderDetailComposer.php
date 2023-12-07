<?php


namespace App\View\Components;

use App\Models\Setting;
use App\Models\Tripsdetails;
use Illuminate\View\View;

class HeaderDetailComposer
{
    public function compose(View $view)
    {
        $headerdetail = Tripsdetails::first();
        $view->with('headerdetail', $headerdetail);
    }
}