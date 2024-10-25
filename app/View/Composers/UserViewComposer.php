<?php 

namespace App\View\Composers;

use Illuminate\View\View;

class Utilizator {

    public $utilizator;

    public $email;

    function __construct($utilizator, $email)
    {
        $this->utilizator = $utilizator;
        $this->email = $email;
    }
}

class UserViewComposer {

    public function compose(View $view)
    {
        $view->with('user', new Utilizator('ion', 'ion@gmail.com'));
    }
}