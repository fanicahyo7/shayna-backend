<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'products_id'
    ];

    protected $hidden = [];

    public function transactionheader()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
