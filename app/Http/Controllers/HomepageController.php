<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //fungsi untuk menampilkan halaman homepage
    public function index()
    {
        $categories = Categories::all();
        $title = "Homepage";
        return view('web.homepage', ['categories' => $categories, 'title' => $title]);
    }
    //fungsi untuk menampilkan halaman products
    public function products()
    {
        $title = "Products";
        return view('web.products', ['title' => $title]);
    }
    //fungsi untuk menampilkan halaman single product
    public function single_product($slug)
    {
        $title = "Single Product";
        return view('web.single_product', ['title' => $title, 'slug' => $slug]);
    }
    //fungsi untuk menampilkan halaman categories
    public function categories()
    {
        $title = "Categories";
        return view('web.categories', ['title' => $title]);
    }
    //fungsi untuk menampilkan halaman single category
    public function single_category($slug)
    {
        $category = Categories::findBySlug($slug);
        $title = "Single Category";
        return view('web.single_category', ['title' => $title, 'slug' => $slug, 'category' => $category]);
    }
    //fungsi untuk menampilkan halaman cart
    public function cart()
    {
        $title = "Cart";
        return view('web.cart', ['title' => $title]);
    }
    //fungsi untuk menampilkan halaman checkout
    public function checkout()
    {
        $title = "Checkout";
        return view('web.checkout', ['title' => $title]);
    }
}
