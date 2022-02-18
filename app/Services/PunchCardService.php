<?php


namespace App\Services;


use App\Models\PunchCard;
use Illuminate\Support\Collection;

class PunchCardService {

    public function store($teamId,Collection $data) {
        $punchCard = new PunchCard();
        $punchCard->team_id = $teamId;

        $punchCard->fill($data->toArray())->save();
    }

}
