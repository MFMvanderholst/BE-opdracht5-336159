<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_per_allergen extends Model
{
    use HasFactory;

    protected $table = "product_per_allergens";
    protected $fillable = ["product_id", "allergen_id"];
}
