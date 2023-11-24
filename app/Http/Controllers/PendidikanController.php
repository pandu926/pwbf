<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    function tampil (){
        $data = Pendidikan::all();
        return view("welcome", ['data' => $data]);
    }
}
