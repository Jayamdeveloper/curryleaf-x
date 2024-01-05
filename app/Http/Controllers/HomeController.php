<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Faq;
class HomeController extends Controller
{
    public function index(){

        $categories = Category::get();
        return view("view.menu",compact("categories"));
    }
    public function menuList($category){

        $categories = Category::get();
        $products = Products::where('category', $category)->get();
        return view("view.menulist",compact("products","categories"));
   }

   public function addToCart($id)
    {
        $product = Products::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $product->name,
                "images" => $product->images,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        dd($cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function reservations(){

        return view("view.reservations");
    }

    public function giftcards(){

        return view("view.giftcards");
    }
     public function faq(){
        $faqall = Faq::get();
        return view("view.faq", compact("faqall"));
    }

    public function aboutus(){


        return view("view.aboutus");
    }

    public function contactus(){


        return view("view.contactus");
    }


}
