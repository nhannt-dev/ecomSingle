<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('product_category_id', $id)->latest()->get();
        return view('user.category', compact('category', 'products'));
    }
    
    public function SingleProduct()
    {
        return view('user.singleproduct');
    }
    
    public function AddToCart()
    {
        return view('user.addtocart');
    }
    
    public function Checkout()
    {
        return view('user.checkout');
    }
    
    public function UserProfile()
    {
        return view('user.userprofile');
    }
    
    public function NewRelease()
    {
        return view('user.newrelease');
    }
    
    public function TodayDeal()
    {
        return view('user.todaydeal');
    }
    
    public function CustomerService()
    {
        return view('user.customerservice');
    }
}
