<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUS\CreateAboutUSRequest;
use App\Http\Requests\AboutUS\UpdateAboutUSRequest;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::paginate(1);
        return view('admin.abouts.index', compact('abouts'));
    }
    public function create()
    {
        return view('admin.abouts.create');
    }
    public function edit(About $about)
    {
        return view('admin.abouts.edit', compact('about'));
    }
    public function store(CreateAboutUSRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/about/images', $fileName, 'public_files');
            $data['image'] = $fileName;
        }

        About::create($data);

        return to_route('abouts.index')->with('success', 'درباره ما ایجاد شد.');
    }
    public function update(UpdateAboutUSRequest $request, About $about)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/about/images', $fileName, 'public_files');
            $data['image'] = $fileName;
        }

        $about->update($data);

        return to_route('abouts.index')->with('success', 'درباره ما ویرایش شد.');
    }
    public function destroy(About $about)
    {
        $about->delete();
        return back()->with('success', 'درباره ما حذف شد.');
    }
}
