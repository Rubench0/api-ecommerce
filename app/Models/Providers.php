<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Providers extends Model
{
    use HasFactory;
    protected $table = 'providers';
    protected $fillable = ['name'];

    public function products() {
        return $this->belongsToMany(Products::class);
    }
}
