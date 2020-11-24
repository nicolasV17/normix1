<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\models\Otec;




class GuestLayout extends Component
{



    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */



    public function __construct()
    {
    }





    public function render()
    {

        return view('layouts.guest');
    }
}
