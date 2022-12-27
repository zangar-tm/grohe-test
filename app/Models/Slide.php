<?php

namespace App\Models;

use App\Traits\Active;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;

class Slide extends Model
{
    use HasFactory, Active;
    protected $table = 'slides';
    protected $fillable = [
       'title',
       'slug',
       'description',
       'image',
       'position',
       'is_active',
    ];
}
