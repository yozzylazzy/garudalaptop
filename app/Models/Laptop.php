<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $primaryKey = 'IDLaptop';
    protected $table = 'table_laptop';

    public function detilpenjualan()
    {
        return $this->hasMany(DetilPenjualan::class, 'IDLaptop');
    }

}
