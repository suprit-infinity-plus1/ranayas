<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TxnLengthUnit extends Model
{
    protected $table = 'txn_length_units';

    protected $fillable = [
        'unit',
        'status',
    ];
}
