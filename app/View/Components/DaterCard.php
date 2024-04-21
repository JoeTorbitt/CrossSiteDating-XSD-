<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DaterCard extends Component
{
    public $dater;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dater)
    {
        $this->dater = $dater;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dater-card');
    }
}
