<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShopexOffer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imgSrc;
    public $text;
    public $content;

    public function __construct($imgSrc,$text,$content)
    {
        $this->imgSrc=$imgSrc;
        $this->text=$text;
        $this->content=$content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shopex-offer');
    }
}
