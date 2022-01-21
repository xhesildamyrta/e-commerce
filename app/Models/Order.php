<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'dateOfPurchase',
        'product_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
