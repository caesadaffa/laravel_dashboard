<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buah extends Model
{
    use HasFactory;

    protected $table = "buahs";

    protected $fillable = [
        'namaBuah',
        'jenisBuah',
        'ukuran',
        'Expired',
    ];
}
