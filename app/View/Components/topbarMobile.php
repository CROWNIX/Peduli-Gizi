<?php

namespace App\View\Components;

use Illuminate\View\Component;

class topbarMobile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = "PEDULI GIZI")
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.topbar-mobile', [
            'title' => $this->title
        ]);
    }
}
