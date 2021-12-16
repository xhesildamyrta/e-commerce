<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TrendingProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imgSrc;
    public $item;
    public $price;
    public $delPrice;
    public function __construct($imgSrc,$item,$price,$delPrice)
    {
        $this->imgSrc=$imgSrc;
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
        return view('components.trending-product');
    }
}
