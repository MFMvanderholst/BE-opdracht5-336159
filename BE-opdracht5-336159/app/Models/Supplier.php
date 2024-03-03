<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Supplier extends Model
{
    use HasFactory;

    protected $table = "suppliers";
    protected $fillable = ["name", "contact_person", "supplier_number", "mobile"];

    public function supplyproduct(): HasMany
    {
        return $this->hasMany(Product_per_supplier::class, 'supplier_id', 'id');
    }
}
