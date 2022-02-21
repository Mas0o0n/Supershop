<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\False_;

class Order extends Model
{
    use HasFactory;
    public function products() {
return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
        }

     public function getTotalCost() {
        $sum = 0;
         foreach ($this->products as $product) {
             $sum += $product->costForCount();

        }
         return $sum;

     }

     public function saveOrder($name, $phonenumber, $comment)
     {
         if ($this->status != 0) {
             return false;
         }
         $this->name = $name;
         $this->phone = $phonenumber;
         $this->comment = $comment;
         $this->status = 1;
         $this->save();
         session()->forget('orderId');
         return true;
     }

  /*  public function user() {
        return $this->belongsTo(User::class);
    }*/

}
