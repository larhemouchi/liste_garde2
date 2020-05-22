<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Commentfields extends Component
{
    public $comment = null;
    public $users;
    public $guardies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($guardies, $users, $comment = null)
    {
        $this->guardies = $guardies;
        $this->users = $users;
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.commentfields');
    }
}
