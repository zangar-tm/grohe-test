<?php

use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Setting;

function setting($key)
{
    // $setting = Setting::where('key', $key)->first();
    // if ($setting) {
    //     return $setting->value;
    // }
    return null;
}

// function fileUrl($path)
// {
//     return Storage::url($path);
// }

// function getActive($route, $path = false,  $class = "active")
// {
//     return $path ? (request()->is($route.'*') ?  $class : '') : (request()->route()->getName() == $route ? $class : "");
// }

// function getCartItems() {
//     $items = \Cart::session(1)->getContent();
//     return $items;
// }

// function calculateSum(){
//     $items = getCartItems();
//     $count = 0;
//     $totalPrice = 0;
//     if($items->count() > 0){
//         foreach($items as $item){
//             $totalPrice += \Cart::get($item->id)->getPriceSum();
//             $count++;
//         }
//     }
//     return $totalPrice;
// }
