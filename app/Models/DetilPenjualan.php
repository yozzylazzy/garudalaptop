<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetilPenjualan extends Model
{
    use HasFactory;
    protected $primaryKey = ['IDTransaksi','IDLaptop'];
    protected $table = 'table_detil_penjualan';
    public $incrementing = false;
    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'IDTransaksi');
    }

    public function laptop()
    {
        return $this->belongsTo(Laptop::class, 'IDLaptop');
    }

}
