<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {

        $data = array('username'=>'mahmoud', 'password'=>'1234');
        return response()->json($data);

    }
}
