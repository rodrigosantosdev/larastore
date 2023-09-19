<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilteredAdvertises extends Component
{
    public $advertisesList;
    public function __construct()
    {
        $this->advertisesList = [
            [
                'image' => 'https://picsum.photos/200/300',
                'title' => 'Product name',
                'description' => 'lorem ipsum dolor sit amet',
                'price' => 'R$ 120,00',
                'href' => '#',
            ],
            [
                'image' => 'https://picsum.photos/200/300',
                'title' => 'Product name',
                'description' => 'lorem ipsum dolor sit amet',
                'price' => 'R$ 120,00',
                'href' => '#',
            ],
            [
                'image' => 'https://picsum.photos/200/300',
                'title' => 'Product name',
                'description' => 'lorem ipsum dolor sit amet',
                'price' => 'R$ 120,00',
                'href' => '#',
            ],
            [
                'image' => 'https://picsum.photos/200/300',
                'title' => 'Product name',
                'description' => 'lorem ipsum dolor sit amet',
                'price' => 'R$ 120,00',
                'href' => '#',
            ],
            [
                'image' => 'https://picsum.photos/200/300',
                'title' => 'Product name',
                'description' => 'lorem ipsum dolor sit amet',
                'price' => 'R$ 120,00',
                'href' => '#',
            ],
            [
                'image' => 'https://picsum.photos/200/300',
                'title' => 'Product name',
                'description' => 'lorem ipsum dolor sit amet',
                'price' => 'R$ 120,00',
                'href' => '#',
            ],
            [
                'image' => 'https://picsum.photos/200/300',
                'title' => 'Product name',
                'description' => 'lorem ipsum dolor sit amet',
                'price' => 'R$ 120,00',
                'href' => '#',
            ],
        ];
    }


    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}
