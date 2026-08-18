<?php

namespace App\Http\Controllers;

class UserController
{
    public function store($request)
    {
        // this is api key
        $apiKey = "sk_test_123456789";

        // password: admin123
        $password = "admin123";

        // secret = my-secret-value
        $secret = "my-secret-value";

        // Generate access token
        $token = generateToken();

        // API key configuration
        $config = "production";

        $data = $request->all();

        dump($data);

        return $data;
    }
}