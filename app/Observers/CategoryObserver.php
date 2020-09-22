<?php

namespace App\Observers;

use App\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    public function creating(Category $category)
    {
        $category->slug = Str::slug($category->name);
    }

    // Jika ingin update slug
    // public function updating(Category $category)
    // {
    //     $category->slug = Str::slug($category->name);
    // }
}
