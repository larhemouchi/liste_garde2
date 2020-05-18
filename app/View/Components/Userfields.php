<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Userfields extends Component
{
        /**
     * The alert type.
     *
     * @var boolean
     */
    public $pass = false;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $pass)
    {
        $this->pass = $pass;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.userfields');
    }
}
