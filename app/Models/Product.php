<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Str;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name_tm',
        'name_en',
        'name_ru',
        'desc_tm',
        'desc_en',
        'desc_ru',
        'images',
        'price',
        'sale_price',
        'discount',
        'sale_type',
    ];

    protected $casts = [
        'images' => 'object'
    ];
}
