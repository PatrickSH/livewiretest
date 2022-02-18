<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PunchCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'punch_duration', 'duration',
        'vat', 'price'
    ];


    public function setPunchDurationAttribute($value) {
        $hours = $value['hours'];
        $minutes = $value['minutes'];

        $this->attributes['punch_duration'] = ($hours > 0 ? $hours * 60 : 0) + $minutes;
    }

    public function setDurationAttribute($value) {
        $hours = $value['hours'];
        $minutes = $value['minutes'];

        $this->attributes['duration'] = ($hours > 0 ? $hours * 60 : 0) + $minutes;
    }
}
