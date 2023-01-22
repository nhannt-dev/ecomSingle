<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage()
    {
        return view('user.category');
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
