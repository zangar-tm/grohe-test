<?php
namespace App\Traits;

trait HasToggle {

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
}