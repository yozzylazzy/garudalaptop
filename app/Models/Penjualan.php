<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $primaryKey = 'IDTransaksi';
    protected $foreignKey = ['NIK','IDAdmin'];
    protected $table = 'table_penjualan';

    public function detilpenjualan()
    {
        return $this->hasMany(DetilPenjualan::class, 'IDTransaksi');
    }

}
