<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function profile($id = 1)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookie = Cookie::make(
            'assignment-3',
            '123-XYZ',
            30, //
            '/',
            $_SERVER['SERVER_NAME'],
            false,
            true
        );

        // Return the response with the data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
