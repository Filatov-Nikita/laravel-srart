<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Includes\InterfaceTest;

class main extends Controller
{
    //resolve interface depedence
    public function test(InterfaceTest $counter) {
        $counter->increment();
        $counter->increment();
        $counter->increment();
        $counter->decrement();
        $res = $counter->getValue();
        dump($res);
        return view('welcome');
    }
}
