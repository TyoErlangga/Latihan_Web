<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name','slug','category','price','stock','image','description','ingredients','calories'
    ];

    // Mutator: auto-generate slug if missing
    public static function booted()
    {
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name) . '-' . time();
            }
        });
    }

    public function getIngredientsArrayAttribute()
    {
        if (!$this->ingredients) return [];
        $decoded = json_decode($this->ingredients, true);
        if (is_array($decoded)) return $decoded;
        // fallback: comma separated
        return array_map('trim', explode(',', $this->ingredients));
    }
}
