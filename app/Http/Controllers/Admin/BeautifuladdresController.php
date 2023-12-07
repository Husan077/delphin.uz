<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beautifuladdres;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class BeautifuladdresController extends Controller
{
    public function index()
    {
        $beautifuladdres = Beautifuladdres::all();
        return view('admin.beautifuladdres.index', compact('beautifuladdres'));
    }

    public function create()
    {
        $beautifuladdres = Beautifuladdres::all();
        return view('admin.beautifuladdres.create', compact('beautifuladdres'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $beautifuladdres = Beautifuladdres::create($request->all());
            if ($request->image) {
                $this->storeImage($beautifuladdres);
            }
            return redirect()->route('beautifuladdres.index');
        }
    }

    public function edit($id)
    {
        $beautifuladdres = Beautifuladdres::find($id);
        return view('admin.beautifuladdres.edit', compact('beautifuladdres'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $beautifuladdres = Beautifuladdres::find($id);
            $beautifuladdres->update($request->all());
            if ($request->image) {
                $this->storeImage($beautifuladdres);
            }
        }
        return redirect()->route('beautifuladdres.index');
    }

    public function destroy($id)
    {
        $beautifuladdres = Beautifuladdres::find($id);
        if ($beautifuladdres->image) {
            unlink(public_path() . '/storage/' . $beautifuladdres->image);
        }
        $beautifuladdres->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('beautifuladdres.index');
    }

    private function storeImage($beautifuladdres)
    {
        if (request()->has('image')) {
            $beautifuladdres->update([
                'image' => \request()->image->store('beautifuladdres', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $beautifuladdres->image));
        $image->save();

    }
}
