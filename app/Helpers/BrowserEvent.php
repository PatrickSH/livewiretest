<?php


namespace App\Helpers;


use Livewire\Component;

class BrowserEvent
{

    public static function modal(Component $component, array $data)
    {

        $data = array_replace(
            [
                'title'             => '',
                'timer'             => 3000,
                'icon'              => 'success',
                'toast'             => true,
                'showConfirmButton' => false,
                'position'          => 'bottom-right'
            ],
            $data
        );

        $component->dispatchBrowserEvent('swal',$data);

    }

}
