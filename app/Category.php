<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'description', 'logo', 'is_active', 'count_products', 'parent_id', 'level', 'meta_description', 'meta_keywords'];

    public function getCategories()
    {
        $categories = [];
        $level_one = $this->level(1)->get();
        dd($level_one);
        return $categories;
    }

    public function scopeLevel($query, $level)
    {
        return $query->where('level', $level);
    }
}
