<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TopCategory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imgSrc;
    public $cat1;
    public $cat2;
    public $cat3;
    public $price;
    public function __construct($imgSrc,$cat1,$cat2,$cat3,$price)
    {
        $this->imgSrc=$imgSrc;
        $this->cat1=$cat1;
        $this->cat2=$cat2;
        $this->cat3=$cat3;
        $this->price=$price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.top-category');
    }
}
