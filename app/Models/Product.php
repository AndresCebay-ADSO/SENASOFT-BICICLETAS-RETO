<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameProd',
        'codeProduct',
        'markProd',
        'colorProd',
        'statusProd',
        'availabilityProd',
        'priceHourProd',
        'imgProd',
        'pesoKgProd',
        'stockProd',
    ];
}