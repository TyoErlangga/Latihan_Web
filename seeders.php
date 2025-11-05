<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name'=>'Pepsi Can 330ml',
                'slug'=>'pepsi-can-330ml',
                'category'=>'Soda',
                'price'=>8000,
                'stock'=>50,
                'image'=>'https://www.pngfind.com/pngs/m/564-5649_pepsi-can-clipart-pepsi-can-transparent-background-hd-png.png',
                'description'=>'Pepsi klasik berkarbonasi — rasa cola segar khas Pepsi.',
                'ingredients'=>json_encode(['Air berkarbonasi','Gula','Perisa cola','Asam fosfat','Kafein']),
                'calories'=>150
            ],
            [
                'name'=>'Coca-Cola Can 330ml',
                'slug'=>'coca-cola-can-330ml',
                'category'=>'Soda',
                'price'=>8500,
                'stock'=>48,
                'image'=>'https://www.pngmart.com/files/7/Coca-Cola-Can-PNG-Photo.png',
                'description'=>'Coca-Cola original — kombinasi rasa manis dan pedas ringan.',
                'ingredients'=>json_encode(['Air berkarbonasi','Gula','Karamel','Kafein']),
                'calories'=>140
            ],
            [
                'name'=>'Sprite Can 330ml',
                'slug'=>'sprite-can-330ml',
                'category'=>'Soda',
                'price'=>8000,
                'stock'=>36,
                'image'=>'https://www.pngitem.com/pimgs/m/364-3643258_sprite-can-png-transparent-png.png',
                'description'=>'Lemon-lime soda tanpa kafein, menyegarkan dan ringan.',
                'ingredients'=>json_encode(['Air berkarbonasi','Gula','Perisa lemon-lime']),
                'calories'=>140
            ],
            [
                'name'=>'Nescafe Classic 200g (Jar)',
                'slug'=>'nescafe-classic-200g',
                'category'=>'Coffee',
                'price'=>42000,
                'stock'=>20,
                'image'=>'https://www.pngmart.com/files/7/Nescafe-Coffee-PNG-Transparent-Image.png',
                'description'=>'Kopi instan Nescafe Classic — aroma kaya dan rasa kopi yang kuat.',
                'ingredients'=>json_encode(['Kopi robusta','Stabilisator']),
                'calories'=>2
            ],
            [
                'name'=>'Fanta Orange Can 330ml',
                'slug'=>'fanta-orange-330ml',
                'category'=>'Soda',
                'price'=>8000,
                'stock'=>34,
                'image'=>'https://www.pngall.com/wp-content/uploads/2016/05/Fanta-PNG-File.png',
                'description'=>'Soda rasa jeruk yang manis dan bergelembung.',
                'ingredients'=>json_encode(['Air berkarbonasi','Gula','Perisa jeruk']),
                'calories'=>160
            ],
            [
                'name'=>'7UP Can 330ml',
                'slug'=>'7up-can-330ml',
                'category'=>'Soda',
                'price'=>8000,
                'stock'=>40,
                'image'=>'https://www.pngkey.com/png/full/191-1914038_7up-can-png-7-up-can-png.png',
                'description'=>'Soda lemon-lime ringan — tanpa kafein.',
                'ingredients'=>json_encode(['Air berkarbonasi','Gula','Perisa lemon-lime']),
                'calories'=>140
            ],
            [
                'name'=>'Mountain Dew Can 330ml',
                'slug'=>'mountain-dew-330ml',
                'category'=>'Soda',
                'price'=>9000,
                'stock'=>22,
                'image'=>'https://purepng.com/public/uploads/large/purepng.com-mountain-dew-sodadrink-bottlebeverage-9415247531195v3t6.png',
                'description'=>'Soda berenergi dengan rasa citrus yang kuat.',
                'ingredients'=>json_encode(['Air berkarbonasi','Gula','Kafein','Perisa']),
                'calories'=>170
            ],
        ];

        foreach ($products as $p) {
            Product::updateOrCreate(['slug'=>$p['slug']], $p);
        }
    }
}

$this->call(ProductSeeder::class);
