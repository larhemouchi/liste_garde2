<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\{ Plage };

class Guardyfields extends Component
{
    public $guardy = null;
    public $plages;
    public $servusers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($plages, $servusers, $guardy = null)
    {
        $this->plages = $plages;
        $this->servusers = $servusers;
        $this->guardy = $guardy;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.guardyfields');
    }
}
