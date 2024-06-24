<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
       
        $name = "Donal Trump";
        $age = "75";

       
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

       
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        
        $cookie = cookie(
            $cookieName,
            $cookieValue,
            $cookieMinutes,
            $cookiePath,
            $cookieDomain,
            $cookieSecure,
            $cookieHttpOnly
        );

      
        return response()->json($data, 200)->cookie($cookie);
    }
}
