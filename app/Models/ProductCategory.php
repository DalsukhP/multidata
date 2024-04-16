<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = "prodcat";

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
