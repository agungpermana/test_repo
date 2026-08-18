<?php

namespace App\Http\Controllers;

class SecurityTestController
{
    public function test($request)
    {
        /*
         * A02: Weak Crypto
         */

        $password = "admin123";

        $md5 = md5($password);

        $sha1 = sha1($password);


        /*
         * A03: SQL Injection
         */

        $id = $request->input('id');

        $query = "SELECT * FROM users WHERE id = " . $id;

        db()->query($query);


        /*
         * A03: Command Injection
         */

        $command = $request->input('command');

        system($command);


        /*
         * A01: Path Traversal
         */

        $file = $request->input('file');

        include($file);


        /*
         * A08: Unsafe Deserialization
         */

        $data = $request->input('data');

        $object = unserialize($data);


        /*
         * A10: SSRF
         */

        $url = $request->input('url');

        $content = file_get_contents($url);


        /*
         * A05: XXE
         */

        $xml = $request->input('xml');

        $document = simplexml_load_string($xml);


        return $object;
    }
}