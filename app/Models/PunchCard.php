<?php

namespace App\Models;

use App\Models\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PunchCard extends Model implements TableInterface
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

    public function getTableCanDelete()
    {
        return true;
    }

    public function getTableCanEdit()
    {
        return true;
    }

    public function getTableHeaders()
    {
        return ['Name','Duration','Punch duration'];
    }

    public function getTableDatas()
    {
        return [$this->name,$this->duration,$this->punch_duration];
    }
}
