<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ✅ Menampilkan daftar semua produk
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Pepsi',
                'price' => 10000,
                'info' => 'Minuman bersoda segar dengan rasa khas Pepsi.',
                'image' => 'pepsi.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Coca-Cola',
                'price' => 11000,
                'info' => 'Minuman legendaris dengan rasa karamel dan soda yang menyegarkan.',
                'image' => 'cocacola.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Sprite',
                'price' => 9000,
                'info' => 'Minuman soda lemon-lime tanpa kafein, ringan dan menyegarkan.',
                'image' => 'sprite.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Nescafe',
                'price' => 15000,
                'info' => 'Kopi siap minum dengan aroma kuat dan rasa lembut khas Nescafe.',
                'image' => 'nescafe.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Fanta',
                'price' => 9500,
                'info' => 'Minuman bersoda rasa buah yang ceria dan menyegarkan.',
                'image' => 'fanta.jpg'
            ],
        ];

        return view('products.index', compact('products'));
    }

    // ✅ Menampilkan detail satu produk
    public function show($id)
    {
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Pepsi',
                'price' => 10000,
                'info' => 'Minuman bersoda segar dengan rasa khas Pepsi.',
                'image' => 'pepsi.jpg'
            ],
            2 => [
                'id' => 2,
                'name' => 'Coca-Cola',
                'price' => 11000,
                'info' => 'Minuman legendaris dengan rasa karamel dan soda yang menyegarkan.',
                'image' => 'cocacola.jpg'
            ],
            3 => [
                'id' => 3,
                'name' => 'Sprite',
                'price' => 9000,
                'info' => 'Minuman soda lemon-lime tanpa kafein, ringan dan menyegarkan.',
                'image' => 'sprite.jpg'
            ],
            4 => [
                'id' => 4,
                'name' => 'Nescafe',
                'price' => 15000,
                'info' => 'Kopi siap minum dengan aroma kuat dan rasa lembut khas Nescafe.',
                'image' => 'nescafe.jpg'
            ],
            5 => [
                'id' => 5,
                'name' => 'Fanta',
                'price' => 9500,
                'info' => 'Minuman bersoda rasa buah yang ceria dan menyegarkan.',
                'image' => 'fanta.jpg'
            ],
        ];

        if (!isset($products[$id])) {
            abort(404);
        }

        $product = $products[$id];
        return view('products.show', compact('product'));
    }
}
