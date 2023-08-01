<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    public function fizzbuzz(Request $request)
    {
        $int = 100;

        if($request->filled('int')){
            $int = $request->int;
        }

        $fizzbuzz = [];
        for ($i = 1; $i <= $int; $i++) {
            if ($i % 15 === 0) {
                $fizzbuzz[] = 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $fizzbuzz[] = 'Fizz';
            } elseif ($i % 5 === 0) {
                $fizzbuzz[] = 'Buzz';
            } else {
                $fizzbuzz[] = $i;
            }
        }

        return $fizzbuzz;
    }
}
