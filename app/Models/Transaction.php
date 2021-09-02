<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;

    use SoftDeletes;

    //tabel berisikan field yang dapat diisi apabila di akses modelnya
    protected $fillable = [
        'name',
        'email',
        'number',
        'address',
        'transaction_total',
        'transaction_status',
    ];

    //mengakses tabel bernama transaction pada database
    protected $table = 'transactions';
}
