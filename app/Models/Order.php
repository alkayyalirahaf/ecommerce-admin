<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\Hasfactory;


class Order extends Model
{

use HasFactory;

protected $fillable =['status',];


    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function products(): BelongsToMany
{
    return $this->belongsToMany(
        Product::class,
        'order_items',
        'order_id',
        'product_id'
    )->withPivot([
        'product_name',
        'price',
        'quantity'
    ])->withTimestamps();
}

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
