<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('admin.sliders.index', compact('sliders'));
    }
    public function create()
    {
        return view('admin.sliders.create');
    }
    public function store(CreateSliderRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/sliders/images', $fileName, 'public_files');
            $data['image'] = $fileName;
        }

        Slider::create($data);

        return to_route('sliders.index')->with('success', 'اسلایدر جدید ایجاد شد.');
    }
    public function show(Slider $slider){}
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/sliders/images', $fileName, 'public_files');
            $data['image'] = $fileName;
        }

        $slider->update($data);

        return to_route('sliders.index')->with('success', 'اسلایدر به روز رسانی شد.');
    }
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back()->with('success', 'اسلایدر حذف شد.');
    }
}
