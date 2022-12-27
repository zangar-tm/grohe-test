<?php

namespace App\Http\Controllers;

use UConverter;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::active()->orderBy('position','asc')->limit(5)->get();
        $setproducts = Product::active()->whereJsonContains('statuses', 'Комплект')->orWhere('title','like',['%набор%','%комплект%'])->orderBy('created_at','desc')->limit(10)->get();
        $products = Product::active()->orderBy('created_at','desc')->limit(10)->get();
        return view('pages.index', compact('slides','setproducts','products'));
    }

    // public function account()
    // {
    //     return view('pages.account');
    // }

    // public function login()
    // {
    //     return view('pages.login');
    // }

    // public function points()
    // {
    //     return view('pages.points');
    // }

    // public function contact()
    // {
    //     return view('pages.contact');
    // }
    // public function checkout()
    // {
    //     $items = getCartItems();
    //     $totalPrice = 0;
    //     $count = 0;
    //     if($items->count() > 0){
    //         foreach($items as $item){
    //             $totalPrice += \Cart::get($item->id)->getPriceSum();
    //             $count += intval($item->quantity);
    //         }
    //     }
    //     return view('pages.checkout',compact('totalPrice','items','count'));
    // }

    // public function address()
    // {
    //     return view('pages.address');
    // }

    // public function product()
    // {
    //     return view('pages.product');
    // }

    // public function orderSuccess(Request $request)
    // {
    //     $code = $request->get('code');
    //     return view('pages.order-accepted',compact('code'));
    // }

    // public function newProducts()
    // {
    //     $products = Product::active()->where('is_new', true)->orderBy('created_at','desc')->paginate(9);
    //     return view('pages.special-products',compact('products'));
    // }

    // public function test() {
    //     $p = Product::first();
    //     $c = Category::first();
    //     $prod = DB::table('products')->first()->title;
    //     // dd(utf8_encode($product->title));
    //     dd(mb_detect_encoding($prod), $prod, mb_detect_encoding($p->title), $p->title);
    //     // dd(mb_detect_encoding($product->title, mb_detect_order(), true));
    //     // dd(iconv(mb_detect_encoding($product->title, mb_detect_order(), true), "UTF-8", $product->title));
    //     // dd(mb_detect_encoding($product->title),$product->title, mb_detect_encoding($prod), $prod);
    // }

}
