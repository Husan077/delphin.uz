<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Locations;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Locations::all();
        return view('admin.locations.index', compact('locations'));
    }

    public function create()
    {
        $locations = Locations::all();
        return view('admin.locations.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'address_uz' => ['nullable', 'string'],
            'address_ru' => ['nullable', 'string'],
            'address_en' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'map_lng' => ['nullable', 'string'],
            'map_lat' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $locations = Locations::create($request->all());
            return redirect()->route('locations.index', compact('locations'));
        }
    }

    public function edit($id)
    {
        $locations = Locations::find($id);
        return view('admin.locations.edit', compact('locations'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'address_uz' => ['nullable', 'string'],
            'address_ru' => ['nullable', 'string'],
            'address_en' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'map_lng' => ['nullable', 'string'],
            'map_lat' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $locations = Locations::find($id);
            $locations->update($request->all());
        }
        return redirect()->route('locations.index');
    }

    public function destroy($id)
    {
        $locations = Locations::find($id);
        if ($locations->image) {
            unlink(public_path() . '/storage/' . $locations->image);
        }
        $locations->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('locations.index');
    }
}
