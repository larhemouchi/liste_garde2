<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Plagefields extends Component
{

    public $plage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($plage = null)
    {
        $this->plage = $plage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.plagefields');
    }
}
