<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')->paginate(5);
        $parentCategories = Category::where('category_id', null)->get();
        return view('admin.categories.index',compact( 'categories','parentCategories'));
    }

    public function create(){}

    public function store(CreateCategoryRequest $request)
    {
        Category::create(
            $request->validated()
        );

        return back()->with('success', 'دسته بندی جدید ایجاد شد.');
    }
    public function edit(Category $category)
    {
        $parentCategories= Category::where('category_id', null)->where('id', '!=', $category->id)->get();
        return view('admin.categories.edit', compact('category','parentCategories'));
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
       $category->update(
           $request->validated()
       );

       return to_route('categories.index')->with('success', 'دسته بندی به روز رسانی شد.');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'دسته بندی با موفقیت حذف ایجاد شد.');
    }

}
