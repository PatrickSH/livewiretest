<?php

namespace App\Http\Livewire\Pages\PunchCard;

use App\Helpers\BrowserEvent;
use App\Models\PunchCard;
use App\Services\PunchCardService;
use Livewire\Component;

class StorePunchCard extends Component
{

    private $punchCardService;

    public $name;

    public $price;

    public $vatPercentage;

    public $duration = [
        'minutes' => 0,
        'hours'   => 0
    ];

    public $punchDuration = [
        'minutes' => 0,
        'hours'   => 0
    ];

    protected $rules = [
        'name'                  => 'required',
        'price'                 => 'required|integer',
        'vatPercentage'         => 'required|integer',
        'duration.hours'        => 'required|integer',
        'duration.minutes'      => 'required|integer',
        'punchDuration.hours'   => 'required|integer',
        'punchDuration.minutes' => 'required|integer',
    ];

    public function booted(PunchCardService $punchCardService)
    {
        $this->punchCardService = $punchCardService;
    }


    public function render()
    {
        return view('livewire.pages.punch-card.store-punch-card');
    }

    public function store()
    {
        $this->validate();

        $this->punchCardService->store(auth()->user()->currentTeam->id, collect([
            'name'           => $this->name,
            'duration'       => $this->duration,
            'punch_duration' => $this->punchDuration,
            'vat'            => $this->vatPercentage,
            'price'          => $this->price
        ]));

        $this->emit('showModal',null);
        $this->emit('resetAndReloadTable');

        BrowserEvent::modal($this, ['title' => 'Punch card saved']);
    }
}
