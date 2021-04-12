<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Products;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $fillable = ['amount','stock','min','products_id'];

    public function products() {
        return $this->belongsTo(Products::class);
    }
}
