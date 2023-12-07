<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customerfeedback;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerfeedbackController extends Controller
{
    public function index()
    {
        $customerfeedbacks = Customerfeedback::all();
        return view('admin.customerfeedbacks.index', compact('customerfeedbacks'));
    }

    public function create()
    {
        $customerfeedbacks = Customerfeedback::all();
        return view('admin.customerfeedbacks.create', compact('customerfeedbacks'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'customer_name_uz' => ['nullable', 'string'],
            'customer_name_ru' => ['nullable', 'string'],
            'customer_name_en' => ['nullable', 'string'],
            'text_uz' => ['nullable', 'string'],
            'text_ru' => ['nullable', 'string'],
            'text_en' => ['nullable', 'string'],
        ]);
        if ($valid) {
            $customerfeedbacks = Customerfeedback::create($request->all());
            if ($request->image) {
                $this->storeImage($customerfeedbacks);
            }
            return redirect()->route('customerfeedbacks.index');
        }
    }

    public function edit($id)
    {
        $customerfeedbacks = Customerfeedback::find($id);
        return view('admin.customerfeedbacks.edit', compact('customerfeedbacks'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'customer_name_uz' => ['nullable', 'string'],
            'customer_name_ru' => ['nullable', 'string'],
            'customer_name_en' => ['nullable', 'string'],
            'text_uz' => ['nullable', 'string'],
            'text_ru' => ['nullable', 'string'],
            'text_en' => ['nullable', 'string'],

        ]);
        if ($valid) {
            $customerfeedbacks = Customerfeedback::find($id);
            $customerfeedbacks->update($request->all());
            if ($request->image) {
                $this->storeImage($customerfeedbacks);
            }
        }
        return redirect()->route('customerfeedbacks.index');
    }

    public function destroy($id)
    {
        $customerfeedbacks = Customerfeedback::find($id);
        if ($customerfeedbacks->image) {
            unlink(public_path() . '/storage/' . $customerfeedbacks->image);
        }
        $customerfeedbacks->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('customerfeedbacks.index');
    }

    private function storeImage($customerfeedbacks)
    {
        if (request()->has('image')) {
            $customerfeedbacks->update([
                'image' => \request()->image->store('customerfeedbacks', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $customerfeedbacks->image));
        $image->save();
    }
}
