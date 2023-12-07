<?php


namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\View;

class SettingsComposer
{
    public function compose(View $view)
    {
        $settings = Setting::first();
        $view->with('settings', $settings);
    }
}
