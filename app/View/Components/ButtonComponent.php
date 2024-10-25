<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ButtonComponent extends Component {

    // How do we play around with the data?
    // Variable going to be available in the button-component component itself
    public $type;

    public function __construct($type = 'null') {

        $this->type = $type;
    }

    // Components methods
    public function changeClass($class = null) {
        if ($class === 'down')
        {
            return 'up';
        }
        return 'something';
    }

    public function render() {
        
        return view('components.button-component');
    }
}
