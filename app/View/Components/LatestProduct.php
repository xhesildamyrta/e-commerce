<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LatestProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $src;
    public $item;
    public $price;
    public $delPrice;
    public function __construct($src,$item,$price,$delPrice)
    {
        $this->src=$src;
        $this->item=$item;
        $this->price=$price;
        $this->delPrice=$delPrice;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-product');
    }
}
