<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Whyus;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class WhyusController extends Controller
{
    public function index()
    {
        $whyus = Whyus::all();
        return view('admin.whyus.index', compact('whyus'));
    }

    public function create()
    {
        $whyus = Whyus::all();
        return view('admin.whyus.create', compact('whyus'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
            'text_uz' => ['nullable', 'string'],
            'text_ru' => ['nullable', 'string'],
            'text_en' => ['nullable', 'string'],
            'number' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $whyus = Whyus::create($request->all());
            return redirect()->route('whyus.index');
        }
    }

    public function edit($id)
    {
        $whyus = Whyus::find($id);
        return view('admin.whyus.edit', compact('whyus'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
            'text_uz' => ['nullable', 'string'],
            'text_ru' => ['nullable', 'string'],
            'text_en' => ['nullable', 'string'],
            'number' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $whyus = Whyus::find($id);
            $whyus->update($request->all());
        }
        return redirect()->route('whyus.index');
    }


    public function destroy($id)
    {
        $whyus = Whyus::find($id);
        if ($whyus->image) {
            unlink(public_path() . '/storage/' . $whyus->image);
        }
        $whyus->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('whyus.index');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $whyus = $request->upload;
            $whyus = $whyus->store('whyus', 'public');
            Image::make(public_path('/storage/' . $whyus))->save();

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/storage/' . $whyus);
            $msg = 'Успешно!';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-typ    e: text/html; charset=utf-8');
            echo $re;
        }
    }
}
