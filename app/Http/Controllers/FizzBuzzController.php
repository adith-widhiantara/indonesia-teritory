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

    public function pola()
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

        // 2, 5, 7, 10, 12, 15, 17, 20, 22, 25, 27, 30

        $count = 0;

        for ($i = 1; $i <= 30; $i++) {
            if ($count == 2) {
                echo $i . ' ';

                $count = 2;
            } else {
                echo '* ';
            }
        }
    }
}
