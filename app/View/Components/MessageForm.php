<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MessageForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __message($dater)
    {
        $this->dater = $dater;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-form');
    }
}