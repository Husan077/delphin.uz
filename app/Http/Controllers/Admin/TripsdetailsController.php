<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tripsdetails;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class TripsdetailsController extends Controller
{
    public function index()
    {
        $tripsdetails = Tripsdetails::all();
        return view('admin.tripsdetails.index', compact('tripsdetails'));
    }

    public function create()
    {
        $tripsdetails = Tripsdetails::all();
        return view('admin.tripsdetails.create', compact('tripsdetails'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
            'price' => ['nullable', 'string'],
            'description_uz' => ['nullable', 'string'],
            'description_ru' => ['nullable', 'string'],
            'description_en' => ['nullable', 'string'],
            'departure_time' => ['nullable', 'string'],
            'return_time' => ['nullable', 'string'],
            'set_the_day' => ['nullable', 'string'],
            'slug' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $tripsdetails = Tripsdetails::create($request->all());
            if ($request->image) {
                $this->storeImage($tripsdetails);
            }
            return redirect()->route('tripsdetails.index');
        }
    }

    public function edit($id)
    {
        $tripsdetails = Tripsdetails::find($id);
        return view('admin.tripsdetails.edit', compact('tripsdetails'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
            'price' => ['nullable', 'string'],
            'description_uz' => ['nullable', 'string'],
            'description_ru' => ['nullable', 'string'],
            'description_en' => ['nullable', 'string'],
            'departure_time' => ['nullable', 'string'],
            'return_time' => ['nullable', 'string'],
            'set_the_day' => ['nullable', 'string'],
            'slug' => ['nullable', 'string'],

        ]);
        if ($valid) {
            $tripsdetails = Tripsdetails::find($id);
            $tripsdetails->update($request->all());
            if ($request->image) {
                $this->storeImage($tripsdetails);
            }
        }
        return redirect()->route('tripsdetails.index');
    }

    public function destroy($id)
    {
        $tripsdetails = Tripsdetails::find($id);
        if ($tripsdetails->image) {
            unlink(public_path() . '/storage/' . $tripsdetails->image);
        }
        $tripsdetails->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('tripsdetails.index');
    }

    private function storeImage($tripsdetails)
    {
        if (request()->has('image')) {
            $tripsdetails->update([
                'image' => \request()->image->store('tripsdetails', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $tripsdetails->image));
        $image->save();
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $tripsdetails = $request->upload;
            $tripsdetails = $tripsdetails->store('tripsdetails', 'public');
            Image::make(public_path('/storage/' . $tripsdetails))->save();

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/storage/' . $tripsdetails);
            $msg = 'Успешно!';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
