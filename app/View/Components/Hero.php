<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{

    public $states;
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->states = [
            ['value' => 'AC', 'name' => 'ACRE'],
            ['value' => 'MG', 'name' => 'MINAS GERAIS'],
            ['value' => 'SP', 'name' => 'SÃO PAULO']
        ];

        $this->categories = [
            ['value' => 'cate1', 'name' => 'cate1'],
            ['value' => 'cate2', 'name' => 'cate2']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero', [
            'states' => $this->states,
            'categories' => $this->categories
        ]);
    }
}