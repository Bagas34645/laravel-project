<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    // private static $product_categories = [
    //     [
    //         'id' => 1,
    //         'name' => 'pria',
    //         'slug' => 'pria',
    //         'description' => 'Ini adalah produk pakaian pria',
    //         'image' => 'images/categories/pria.png',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'wanita',
    //         'slug' => 'wanita',
    //         'description' => 'Ini adalah produk pakaian wanita',
    //         'image' => 'images/categories/wanita.png',
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'anak-anak',
    //         'slug' => 'anak-anak',
    //         'description' => 'Ini adalah produk pakaian anak-anak',
    //         'image' => 'images/categories/anak-anak.png',
    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'aksesoris',
    //         'slug' => 'aksesoris',
    //         'description' => 'Ini adalah produk aksesori',
    //         'image' => 'images/categories/aksesoris.png',
    //     ],
    //     [
    //         'id' => 5,
    //         'name' => 'sepatu',
    //         'slug' => 'sepatu',
    //         'description' => 'Ini adalah produk sepatu',
    //         'image' => 'images/categories/sepatu.jpg',
    //     ]
    // ];

    // public static function all()
    // {
    //     return collect(self::$product_categories);
    // }

    public static function findBySlug($slug)
    {
        $categories = static::all();
        return $categories->firstWhere('slug', $slug);
    }
}
