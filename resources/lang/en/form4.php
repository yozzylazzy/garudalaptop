<?php
return
    [
        'title' => 'Add Transaction Data',
        'input' => [
            'NIK'    => 'Client Special Number (NIK)',
            'IDAdmin'  => 'Admin ID',
            'tglpembelian'    => 'Transaction Date',
            'metode'    => 'Payment Method',
            'pilihan_kategori' =>
			[
				'1' => 'Debit',
				'2' => 'OVO',
                '3' => 'GOPAY',
                '4' => 'Kredit',
                '5' => 'QRIS',
                '6' => 'DANA',
                '7' => 'Transfer',
                '8' => 'Cash',
			],
            'tombol1'  => 'Save',
            'tombol2'  => 'Cancel',
        ]
    ];
