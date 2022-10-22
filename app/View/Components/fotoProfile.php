<?php

namespace App\View\Components;

use Illuminate\View\Component;

class fotoProfile extends Component
{

    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image = null)
    {
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.foto-profile');
    }
}
