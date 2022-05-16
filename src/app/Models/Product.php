<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use LaravelReady\LicenseServer\Traits\Licensable;

class Product extends Model
{
    use HasFactory, Licensable;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
    ];
}
