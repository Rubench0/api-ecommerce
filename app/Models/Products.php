<?php

namespace App\Models;

use App\Models\Categories;
use App\Models\Providers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['code','name','price','categories_id'];

    public function category() {
        return $this->belongsTo(Categories::class);
    }

    public function provider() {
        return $this->belongsToMany(Providers::class);
    }
}
