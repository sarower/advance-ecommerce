<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class CategoryController extends Controller
{
    public function index()
    {
        return view ('admin.category.index');
    }
    public function create(Request $request)
    {
        Category::saveCategory($request);
        return back()->with('msg', 'Category created successfully');
    }

    public function manage()
    {
        return view('admin.category.manage', ['categories' => Category::all()]);
    }
    public function edit($id)
    {
        return view('admin.category.edit', ['category'=> Category::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request,$id);
        return redirect('category-manage')->with('msg','Category Updated Successfully');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('category-manage')->with('msg','Category Deleted successfully');
    }
}
