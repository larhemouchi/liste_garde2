<?php

namespace App\View\Components;

use App\Roly;

use Illuminate\View\Component;

class Rolyfields extends Component
{

    public $roly;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($roly = null)
    {
        $this->roly = $roly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.rolyfields');
    }
}
