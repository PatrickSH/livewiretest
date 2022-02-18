<?php


namespace App\Models\Interfaces;

interface TableInterface {
    public function getTableHeaders();

    public function getTableDatas();

    public function getTableCanDelete();

    public function getTableCanEdit();
}
