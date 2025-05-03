<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\CreatePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Models\Item;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::with('items')->get();
        $items = Item::all();
        return view('admin.portfolios.index', compact('portfolios', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::all();
        return view('admin.portfolios.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePortfolioRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/portfolios/images', $fileName, 'public_files');
            $data['image'] = $fileName;
        }

        $portfolio = Portfolio::create($data);
        $portfolio->items()->attach($request->items);

        return to_route('portfolios.index')->with('success', 'نمونه کار جدید ایجاد شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/portfolios/images', $fileName, 'public_files');
            $data['image'] = $fileName;
        }

        $portfolio->update($data);

        return to_route('portfolios.index')->with('success', 'نمونه کار جدید ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return back()->with('success', 'نمونه کار حذف شد.');
    }
}
