<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeatureProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imgSrc;
    public $item;
    public $code;
    public $price;

    public function __construct($imgSrc,$item,$code,$price)
    {
        $this->imgSrc=$imgSrc;
        $this->item=$item;
        $this->code=$code;
        $this->price=$price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.feature-product');
    }
}
