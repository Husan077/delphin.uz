<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class AboutsController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        $about = About::all();
        return view('admin.about.create', compact('about'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'years_old' => ['nullable', 'string'],
            'level_uz' => ['nullable', 'string'],
            'level_ru' => ['nullable', 'string'],
            'image' => ['nullable'],
        ]);

        if ($valid) {
            $about = About::create($request->all());
            if ($request->image) {
                $this->storeImage($about);
            }
            return redirect()->route('abouts.index');
        }
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'years_old' => ['nullable', 'string'],
            'level_uz' => ['nullable', 'string'],
            'level_ru' => ['nullable', 'string'],
            'image' => ['nullable', 'string'],
        ]);

        if ($valid) {
            $about = About::find($id);
            $about->update($request->all());
            if ($request->image) {
                $this->storeImage($about);
            }
        }
        return redirect()->route('abouts.index');
    }

    public function destroy($id)
    {
        $about = About::find($id);
        if ($about->image) {
            unlink(public_path() . '/storage/' . $about->image);
        }
        $about->delete();
        Alert::success('Успешно', 'Данные удалены!');
        return redirect()->route('about.index');
    }

    private function storeImage($about)
    {
        if (request()->has('image')) {
            $about->update([
                'image' => \request()->image->store('about', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $about->image));
        $image->save();
    }


}
