<?php
return
    [
        'title' => 'Tambah Data Penjualan',
        'input' => [
            'NIK'    => 'NIK Pembeli',
            'IDAdmin'  => 'ID Admin Penerima Pembelian',
            'tglpembelian'    => 'Tanggal Pembelian',
            'metode'    => 'Metode Pembayaran',
            'pilihan_kategori' =>
			[
				'1' => 'Debit',
				'2' => 'OVO',
                '3' => 'GOPAY',
                '4' => 'Kredit',
                '5' => 'QRIS',
                '6' => 'DANA',
                '7' => 'Transfer',
                '8' => 'Tunai',
			],
            'tombol1'  => 'Simpan',
            'tombol2'  => 'Batal',
        ]
    ];
