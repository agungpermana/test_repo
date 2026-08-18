<?php

namespace App\Http\Controllers;

class UserController
{
    public function store($request)
    {
        $data = $request->all();

        dump($data);

        return $data;
    }
}
