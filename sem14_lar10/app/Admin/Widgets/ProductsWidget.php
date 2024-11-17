<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Product::count();
        return view('voyager::dimmer', array_merge(
            $this->config,
            [
                'icon' => 'voyager-bread',
                'title' => 'Счётчик продуктов',
                'text' => "Кол-во разновидностей продуктов: {$count}",
                'button' => [
                    'text' => 'Перейти к списку',
                    'link' => ''
                ],
                'image' => 'storage/products.jpg'
            ]
        ));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
