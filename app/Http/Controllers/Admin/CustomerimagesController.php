<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customerimages;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerimagesController extends Controller
{
    public function index()
    {
        $customerimages = Customerimages::all();
        return view('admin.customerimages.index', compact('customerimages'));
    }

    public function create()
    {
        $customerimages = Customerimages::all();
        return view('admin.customerimages.create', compact('customerimages'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($valid) {
            $customerimages = Customerimages::create($request->all());
            if ($request->image) {
                $this->storeImage($customerimages);
            }
            return redirect()->route('customerimages.index');
        }
    }

    public function edit($id)
    {
        $customerimages = Customerimages::find($id);
        return view('admin.customerimages.edit', compact('customerimages'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $customerimages = Customerimages::find($id);
            $customerimages->update($request->all());
            if ($request->image) {
                $this->storeImage($customerimages);
            }
        }
        return redirect()->route('customerimages.index');
    }

    public function destroy($id)
    {
        $customerimages = Customerimages::find($id);
        if ($customerimages->image) {
            unlink(public_path() . '/storage/' . $customerimages->image);
        }
        $customerimages->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('customerimages.index');
    }

    private function storeImage($customerimages)
    {
        if (request()->has('image')) {
            $customerimages->update([
                'image' => \request()->image->store('customerimages', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $customerimages->image));
        $image->save();
    }
}
