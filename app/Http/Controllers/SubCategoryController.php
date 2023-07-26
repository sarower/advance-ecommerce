<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index',[
            'categories' => Category::all()
        ]);
    }
    public function create(Request $request)
    {
        SubCategory::newSubcategory($request);
        return redirect('sub-category-add')->with('msg', 'Sub Category Create successfully');
    }
    public function manage()
    {
        return view('admin.sub-category.manage', ['subCategories'=> SubCategory::all()]);
    }
    public function edit($id)
    {
        return view('admin.sub-category.edit', [
            'subCategory'=>SubCategory::find($id),
            'categories'=>Category::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('sub-category-manage');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('sub-category-manage');
    }
}
