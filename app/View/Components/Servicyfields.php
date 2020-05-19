<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Servicyfields extends Component
{
    public $servicy = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($servicy = null)
    {
        $this->servicy = $servicy;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.servicyfields');
    }
}
