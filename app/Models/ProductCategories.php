<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
