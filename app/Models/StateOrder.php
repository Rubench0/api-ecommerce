<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orders;

class StateOrder extends Model
{
    use HasFactory;
    protected $table = 'state_order';
    protected $fillable = ['name'];

    public function orders() {
        return $this->hasMany(Orders::class);
    }
}
