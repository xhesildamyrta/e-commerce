<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LatestBlog extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imgSrc;
    public $author;
    public $date;
    public $title;
    public $body;
    public function __construct($imgSrc,$author,$date,$title,$body)
    {
        $this->imgSrc=$imgSrc;
        $this->author=$author;
        $this->date=$date;
        $this->title=$title;
        $this->body=$body;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-blog');
    }
}
