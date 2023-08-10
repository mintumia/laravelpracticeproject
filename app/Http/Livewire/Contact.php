<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public  bool $newcontact = true;
    public $contactInfo;

    /* public function mounded(){

         $this->contactInfo;
     }*/

    public function render()
    {
        return view('livewire.contact');
    }

    public function createContact(){
        $this->newcontact=false;

    }

}
