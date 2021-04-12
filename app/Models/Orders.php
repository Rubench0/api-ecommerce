<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Priority;
use App\Models\StateOrder;
use App\Models\Inventory;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['order_date','priority_id','state_order_id'];

    public function priority() {
        return $this->belongsTo(Priority::class);
    }

    public function state() {
        return $this->belongsTo(StateOrder::class);
    }

    public function inventories() {
        return $this->belongsToMany(Inventory::class);
    }
}
