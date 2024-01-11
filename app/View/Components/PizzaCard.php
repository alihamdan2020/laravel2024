<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PizzaCard extends Component
{
  public $product;
    public function __construct($a)
    {
        $this->product=$a;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pizza-card');
    }
}
