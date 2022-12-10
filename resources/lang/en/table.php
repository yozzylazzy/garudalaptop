<?php
return 
[
	'title' => 'List of Book',
    'table' => ['judul'    => 'Book Title',
				'penulis'  => 'Author',
				'penerbit' => 'Publisher',
				'kategori' => 'Category',
				'pilihan_kategori' => 
				  ['sains' => 'Science',
				   'fiksi' => 'Fiction',
                   'ngaco' => 'Data Not Found',
				  ],
				'harga'    => 'Book Price',
                'tombol0'  => 'Add Book',
				'tombol1'  => 'Edit',
				'tombol2'  => 'Delete',				
                ],
    'modalbox' => ['title' => 'Confirmation',
                   'body'  => 'Are you sure to delete this data?',
                   'tombola' => 'Yes',
                   'tombolb' => 'No',]
    
];