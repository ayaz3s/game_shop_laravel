<?php

namespace App\Models;

class ProductOld
{
    public static function all(){
        return  [
            [
                'id' => 1,
                'price' => '59.99',
                'title' => 'Destiny',
                'image' => 'game1.jpg'
            ],
            [
                'id' => 2,
                'price' => '59.99',
                'title' => 'Destiny',
                'image' => 'game2.jpg'
            ],
            [
                'id' => 3,
                'price' => '59.99',
                'title' => 'Destiny',
                'image' => 'game3.jpg'
            ],
            [
                'id' => 4,
                'price' => '59.99',
                'title' => 'Destiny',
                'image' => 'game4.jpg'
            ],
            [
                'id' => 5,
                'price' => '59.99',
                'title' => 'Destiny',
                'image' => 'game5.jpg'
            ],
            [
                'id' => 6,
                'price' => '59.99',
                'title' => 'Destiny',
                'image' => 'game6.jpg'
            ],
            [
                'id' => 7,
                'price' => '59.99',
                'title' => 'Destiny',
                'image' => 'game7.jpg'
            ]
        ];
    }

    public static function find($id){
        $products = self::all();

        foreach ($products as $product){
            if ($product['id'] == $id){
                return $product;
            }
        }
        return abort(404, 'not found');
    }
}
