<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use function response;

class FizzBuzzController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function fizzbuzz(Request $request): JsonResponse
    {
        $int = 100;

        if ($request->filled('int')) {
            $int = $request->int;
        }

        $fizzbuzz = [];
        for ($i = 1; $i <= $int; $i++) {
            if ($i % 15 === 0) {
                $fizzbuzz[] = 'ulartangga';
            } else if ($i % 3 === 0) {
                $fizzbuzz[] = 'ular';
            } else if ($i % 5 === 0) {
                $fizzbuzz[] = 'tangga';
            } else {
                $fizzbuzz[] = $i;
            }
        }

        return response()
            ->json($fizzbuzz);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @noinspection PhpUndefinedVariableInspection
     */
    public function pola(Request $request): JsonResponse
    {
        /*
         * Diketahui, sebuah deret bilangan.
            Deret 1 => 1
            Deret 2 => 1 *
            Deret 5 => 1 * 3 4 *
            Deret 14 => 1 * 3 4 * 6 * 8 9 * 11 * 13 14
            buah sebuah fungsi printNumber(input), dengan spesifikasi:
            input bertipe integer positif
            output bertipe string, sesuai dengan contoh di atas

         */

        // 1 * 3 4 * 6 * 8 9 * 11 * 13 14

        $input = 14;

        if ($request->filled('int')) {
            $input = $request->int;
        }

        $result = [];

        $key = 0;

        for ($i = 2; $i <= $input; $i++) {
            $i--;
            for ($j = 0; $j <= 4; $j++) {
                $result[$key][] = $i;
                $i++;

                if ($i > $input) {
                    break;
                }
            }
            $key++;
        }

        foreach ($result as $value) {
            foreach ($value as $item => $val) {
                if ($item == 1 || $item == 4) {
                    $final[] = '*';
                } else {
                    $final[] = $val;
                }
            }
        }
        
        $final = implode(' ', $final);

        return response()
            ->json($final);
    }
}
