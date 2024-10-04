<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    public function service_categories()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function orderItems()
    {
        return $this->hasMany(Order_item::class,'product_id');
    }

    public function serviceProvider()
    {
        return $this->hasOne(ServiceProvider::class);
    }
}
