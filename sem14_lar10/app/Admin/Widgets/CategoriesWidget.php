<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Category::count();
        return view('voyager::dimmer', array_merge(
            $this->config,
            [
                'icon' => 'voyager-tag',
                'title' => 'Счётчик категорий',
                'text' => "Кол-во категорий: {$count}",
                'button' => [
                    'text' => 'Перейти к списку',
                    'link' => ''
                ],
                'image' => 'storage/categories.png'
            ]
        ));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
