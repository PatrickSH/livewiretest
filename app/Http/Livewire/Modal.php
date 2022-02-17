<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{

    public $comp = null;

    protected $listeners = ['showModal'];

    public function showModal($modal) {
        $this->comp = $modal;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
