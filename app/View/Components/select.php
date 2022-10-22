<?php

namespace App\View\Components;

use Illuminate\View\Component;

class select extends Component
{
    /**
     * The select label.
     *
     * @var string
     */
    public $label;
    /**
     * The select name.
     *
     * @var string
     */
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = null, $name = null)
    {
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
