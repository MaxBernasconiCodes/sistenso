<?php

namespace App\View\Components;

use Illuminate\View\Component;

class comentform extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $postid;

    public function __construct($postid)
    {
        $this->postid = $postid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comentform');
    }
}
