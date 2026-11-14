<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
protected $fillable = ['category_id','name','description','price','stock','image'];

    public function seller():BelongsTo{
        return $this->belongsTo(Seller::class);
    }

    
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


  public function orders(): BelongsToMany
{
    return $this->belongsToMany(
        Order::class,
        'order_items',
        'product_id',
        'order_id'
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
