<?php

namespace App\Services;

use App\Models\Home;

class HomeService
{
    public function getAllHomes()
    {
        return Home::all();
    }

    public function saveHome(array $data, $id = null)
    {
        $record = $id ? Home::find($id) : new Home;

        if (!$record) {
            throw new \Exception('Record not found.');
        }

        $record->title = trim($data['title']);
        $record->work_experience = trim($data['work_experience']);
        $record->save();

        return $record;
    }
}