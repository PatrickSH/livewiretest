<?php

namespace App\Http\Livewire;

use App\Models\PunchCard;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{

    use WithPagination;

    public $tableClass = "asd";

    protected $listeners = ['resetAndReloadTable'];

    public function resetAndReloadTable() {
        $this->resetPage();
    }

    public function render()
    {
        $class = new PunchCard();

        return view('livewire.table',[
            'class'   => $class,
            'datas' => $class::paginate(10)
        ]);
    }
}
