<?php
namespace App\Traits;

trait HasSlug {
    public function scopeSlug($query, $slug) {
        return $query->where('slug', $slug);
    }
}