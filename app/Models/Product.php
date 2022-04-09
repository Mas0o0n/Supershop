<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'code', 'price', 'brand', 'image', 'description'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function costForCount() {
        if(!is_null($this->pivot)) {
            return $this->pivot->count*$this->price;
        }
        return $this->price;
    }


}
