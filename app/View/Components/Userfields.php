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
    public $user = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pass = false, $user =null )
    {
        $this->pass = $pass;
        $this->user = $user;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        //dd($this->user);
        return view('components.userfields');
    }
}
