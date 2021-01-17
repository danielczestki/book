<?php

namespace App\Http\Controllers;

class TokenController extends Controller
{
    /**
     * @return array
     */
    public function get()
    {
        return [
            'token' => csrf_token(),
        ];
    }
}
