<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
		    'name' => 'MI Redme 9',
		    'price' => 17000,
            'category' => 'Mobile',
            'description' => 'Smartphone with 4GB RAM and 64 GB Internal Memory',
            'gallery' => 'https://static.toiimg.com/photo/73078527.cms',
		    ],
            [
            'name' => 'POCO',
            'price' => 17000,
            'category' => 'Mobile',
            'description' => 'Smartphone with 4GB RAM and 64 GB Internal Memory',
            'gallery' => 'https://static.toiimg.com/photo/73078527.cms',
            ],
            [
            'name' => 'IPhone 11',
            'price' => 100000,
            'category' => 'Mobile',
            'description' => 'Smartphone with 10GB RAM and 128 GB Internal Memory',
            'gallery' => 'https://static.toiimg.com/photo/73078527.cms',
            ],
            [
            'name' => 'One Plus',
            'price' => 33000,
            'category' => 'Mobile',
            'description' => 'Smartphone with 6GB RAM and 128 GB Internal Memory',
            'gallery' => 'https://static.toiimg.com/photo/73078527.cms',
            ],
        ]);
    }
}
