<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stockroom extends Model
{
    use HasFactory;

    protected $table = "stockrooms";
    protected $fillable = ["product_id", "packaging_unit" => 'decimal:2', "number_present" => 'integer'];

    
}
