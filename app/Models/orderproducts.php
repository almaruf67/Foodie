<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class orderproducts extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'quantity',
    ];
    
    public function products(){
        
        return $this->hasone(Product::class,'id');
    }
}
