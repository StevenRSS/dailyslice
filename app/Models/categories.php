<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categories extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_name", "category_img", "category_desc"
    ];
    protected $with = ['books'];
    public function images() : HasMany{
        return $this->hasMany(categories_image::class);
    }
}
