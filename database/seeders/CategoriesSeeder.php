<?php

namespace Database\Seeders;

use App\Models\categories;
use App\Models\categories_image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            categories::create([
                'category_image' => '433704.jpg',
                'category_name' => 'Korean Cake',
                'category_desc' => 'idk'
            ]);


            categories::create(
                [
                    'category_image' => '433719.jpg',
                    'category_name' => 'Kue Potong',
                    'category_desc' => 'idk'
                ]
            );
        }
    }
}
