<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::where('is_active', 1)
            ->latest('id')
            ->limit(9)->select(['id', 'client_name', 'client_designation', 'client_testimonial', 'client_image'])->get();

        $categories = Category::where('is_active', 1)->latest('id')->limit(4)->select(['id', 'title', 'category_image', 'slug'])->get();

        $products = Product::where('is_active', 1)
            ->latest('id')->select(['id', 'name', 'slug', 'product_price',
            'product_stock', 'product_rating', 'product_image'])->paginate(6);

        return view('frontend.pages.home', compact('testimonials', 'categories', 'products'));
    }
}
