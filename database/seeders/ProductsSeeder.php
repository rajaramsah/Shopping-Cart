<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //
        DB::table('products')->insert([

            [

                'name' =>'Sumsung',
                'price' =>'10000',
                'description' =>'Sumsung mobile product',
                'gallery' =>'https://images.pexels.com/photos/47261/pexels-photo-47261.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'category' =>'mobile',
                
            ],
            [

                'name' =>'TV',
                'price' =>'5000',
                'description' =>'it new TV product',
                'gallery' =>'https://images.pexels.com/photos/3151392/pexels-photo-3151392.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'category' =>'TV',
                
            ],
            [

                'name' =>'Washing Mashine',
                'price' =>'8000',
                'description' =>'it new Washing Mashine product',
                'gallery' =>'https://images.pexels.com/photos/4700383/pexels-photo-4700383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'category' =>'Washing Mashine',
                
            ]
        ]);
    }
}
