<?php
namespace App\Traits;

trait HasTitle {
    public function scopeTitle($query, $title) {
        return $query->where('title', $title);
    }
}
