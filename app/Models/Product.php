<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    //tabel berisikan field yang dapat diisi apabila di akses modelnya
     protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'quantity',
    ];

    //mengakses tabel bernama product pada database
    protected $table = 'products';
    
}
