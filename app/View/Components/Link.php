<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // INLINE COMPONENT VIEWS FOR SMALL COMPONENTS => WHEN YOU DONT HAVE TO DEAL WITH LOT OF IN THE VIEW, YOU CAN RENDER YOUR MARKUP FROM THE CLASS 
        return <<<'blade'
            <div>
                He who is contented is rich. - Laozi
            </div>
        blade;
    }
}
