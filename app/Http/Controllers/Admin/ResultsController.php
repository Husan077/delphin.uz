<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Results;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ResultsController extends Controller
{

    public function index()
    {
        $results = Results::all();
        return view('admin.results.index', compact('results'));
    }

    public function create()
    {
        $results = Results::all();
        return view('admin.results.create', compact('results'));
    }

    public function store(Request $request)
    {
        $results = new Results();
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('results', $imagename);
        $results->image = $imagename;
        $results->title_uz = $request->title_uz;
        $results->title_ru = $request->title_ru;
        $results->title_en = $request->title_en;
        $results->number = $request->number;
        $results->save();
        $results = Results::all();
        return view('admin.results.index', compact('results'));
    }

    public function edit($id)
    {
        $results = Results::find($id);
        return view('admin.results.edit', compact('results'));
    }

    public function update(Request $request, $id)
    {
        $results = Results::find($id);
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('results', $imagename);
        $results->image = $imagename;
        $results->title_uz = $request->title_uz;
        $results->title_ru = $request->title_ru;
        $results->title_en = $request->title_en;
        $results->number = $request->number;
        $results->save();
        return redirect()->route('results.index');
    }

    public function destroy($id)
    {
        $results = Results::find($id);
        if ($results->image) {
            unlink(public_path() . '/results/' . $results->image);
        }
        $results->delete();
        Alert::success('Успешно', 'удален!');
        return redirect()->route('results.index');
    }
}
