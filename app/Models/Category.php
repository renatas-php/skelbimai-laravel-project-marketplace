<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subcategoryByCat($id) {
        $subcategories = Subcategory::where('category_id', $id)->get();
        return $subcategories;
    }
}
