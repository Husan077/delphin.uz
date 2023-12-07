<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        $faqs = Faqs::all();
        return view('admin.faqs.create', compact('faqs'));
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
        ]);
        if ($valid) {
            $faqs = Faqs::create($request->all());
            return redirect()->route('faqs.index', compact('faqs'));
        }
    }

    public function edit($id)
    {
        $faqs = Faqs::find($id);
        return view('admin.faqs.edit', compact('faqs'));
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


        ]);
        if ($valid) {
            $faqs = Faqs::find($id);
            $faqs->update($request->all());

        }
        return redirect()->route('faqs.index');
    }


    public function destroy($id)
    {
        $faqs = Faqs::find($id);

        $faqs->delete();
        Alert::success('Muvaffaqiyatli', 'Yakunlandi!');
        return redirect()->route('faqs.index');

    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $faqs = $request->upload;
            $faqs = $faqs->store('faqs', 'public');
            Image::make(public_path('/storage/' . $faqs))->save();

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/storage/' . $faqs);
            $msg = 'Успешно!';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
