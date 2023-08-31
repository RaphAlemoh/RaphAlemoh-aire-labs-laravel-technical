<?php

namespace App\Livewire;

use Livewire\Component;

class Testimonies extends Component
{
    public $title = 'Airelabs Testimonies';

    public function render()
    {
        return view('livewire.testimonies');
    }
}
