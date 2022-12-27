<?php

namespace App\Models;

use App\Traits\HasSlug;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Multitenancy\Models\Concerns\UsesLandlordConnection;

class Category extends Model
{
    use HasFactory, HasSlug;
    use Searchable;
    protected $table = 'categories';
    protected $fillable = [
       'parent_id',
       'title',
       'meta_description',
       'slug',
       'image',
       'position',
       'is_active',
    ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // public function groups(){
    //     return $this->belongsToMany(Group::class,'category_group','category_id','group_id');
    // }
}
