<?php

namespace App\Models;

use App\Traits\Active;
use App\Traits\HasSlug;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;

class Product extends Model
{
    use Searchable, Active;
    use HasFactory, HasSlug;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'meta_description',
        'old_price',
        'new_price',
        'in_stock',
        'image',
        'carousel',
        'overview',
        'blueprints',
        'instructions',
        'conditions',
        'videos',
        'is_active',
        'statuses',
        'position',
        'code',
        'article_id',
        'key','value'
    ];

    protected $appends = [
        "inCart",
    ];

    protected $casts = [
        'instructions' => 'array',
        'carousel' => 'array',
        'conditions' =>'array',
        'blueprints'=>'array',
        'videos'=>'array',
        'statuses'=>'array',
    ];

    // public function getInCartAttribute() {
    //     $items = getCartItems();
    //     $res = false;
    //     foreach($items as $item) {
    //         if($item->associatedModel->id == $this->id){
    //             $res = true;
    //         }
    //     }
    //     return $res;
    // }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function filters()
    // {
    //     return $this->belongsToMany(Filter::class,'product_filter','product_id','filter_id');
    // }

    // public function article()
    // {
    //     return $this->belongsTo(Article::class);
    // }
}
