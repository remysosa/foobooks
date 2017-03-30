<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
    *
    */
    public function practice1() {
        dump('This is the first example.');
    }
    /**
    * ANY (GET/POST/PUT/DELETE)
    * /practice/{n?}
    *
    * This method accepts all requests to /practice/ and
    * invokes the appropriate method.
    *
    * http://foobooks.loc/practice/1 => invokes practice1
    * http://foobooks.loc/practice/5 => invokes practice5
    */
    public function index($n) {
        $method = 'practice'.$n;

        if(method_exists($this, $method))
        return $this->$method();
        else {
            dd("Practice route [{$n}] not defined");
        }
    }
}
