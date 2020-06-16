<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{


    public function first() {


           // $data        = [];
            //$data['str'] = 'Haytham';
            //$data['age'] = 23;
            /*-
            -object
            */
            /*$obj = new \stdClass();
            $obj-> name = 'ahmed';
            $obj->address='assiut';*/

        $data2 = [];

            return view('welcome', compact('data2'));

    }

    public function second() {
        return 'firstController2';
    }
    public function third() {
        return 'firstController3';
    }
}
