<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subcategory;

    public static function newSubcategory($request)
    {
        self::$subcategory = new SubCategory();
        self::$subcategory->name = $request->name;
        self::$subcategory->category_id = $request->category_id;
        self::$subcategory->save();
    }
    public static function updateSubCategory($request, $id)
    {
        self::$subcategory = SubCategory::find($id);
        self::$subcategory->name = $request->name;
        self::$subcategory->status = $request->status;
        self::$subcategory->category_id = $request->category_id;
        self::$subcategory->save();
    }
    public static function deleteSubCategory($id)
    {
        self::$subcategory = SubCategory::find($id);
        self::$subcategory->delete();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
