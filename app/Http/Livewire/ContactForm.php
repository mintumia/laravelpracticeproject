<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Contact;

class ContactForm extends Component
{

    public $name, $mobile, $email;
    public $check = true;

    public function submit()
    {

        if($this->check){
           // echo($this->name . $this->mobile . $this->email);
        }
        $this->check = false;

    }

    public function render()
    {
        return view('livewire.contact-form');
    }



}
