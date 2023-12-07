<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClickTransaction;

class ClickTransUserController
{
    public function index()
    {

        $click_users = ClickTransaction::all();

        return view('admin.click.index', compact('click_users'));
    }
}
