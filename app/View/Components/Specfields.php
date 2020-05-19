<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Specfields extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $rolies;
    public $spec = null;


    public function __construct($rolies, $spec = null)
    {
        $this->spec = $spec;
        $this->rolies = $rolies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.specfields');
    }
}
