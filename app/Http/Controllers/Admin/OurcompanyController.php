<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ourcompanys;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class OurcompanyController extends Controller
{
    public function index()
    {
        $ourcompanys = Ourcompanys::all();
        return view('admin.ourcompanys.index', compact('ourcompanys'));
    }

    public function create()
    {
        $ourcompanys = Ourcompanys::all();
        return view('admin.ourcompanys.create', compact('ourcompanys'));
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
            $ourcompanys = Ourcompanys::create($request->all());
            return redirect()->route('ourcompanys.index', compact('ourcompanys'));
        }
    }

    public function edit($id)
    {
        $ourcompanys = Ourcompanys::find($id);
        return view('admin.ourcompanys.edit', compact('ourcompanys'));
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
            $ourcompanys = Ourcompanys::find($id);
            $ourcompanys->update($request->all());
        }
        return redirect()->route('ourcompanys.index');
    }

    public function destroy($id)
    {
        $ourcompanys = Ourcompanys::find($id);
        if ($ourcompanys->image) {
            unlink(public_path() . '/storage/' . $ourcompanys->image);
        }
        $ourcompanys->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('ourcompanys.index');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $ourcompanys = $request->upload;
            $ourcompanys = $ourcompanys->store('ourcompanys', 'public');
            Image::make(public_path('/storage/' . $ourcompanys))->save();

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/storage/' . $ourcompanys);
            $msg = 'Успешно!';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
