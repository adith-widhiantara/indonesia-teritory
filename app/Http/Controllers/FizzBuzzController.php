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
}
