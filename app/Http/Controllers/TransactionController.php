<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * TransactionController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authorizer(Request $request)
    {
        if ($request->value <= 0 || $request->value >= 100.0) {
            return response()->json(['message' => 'Transação não autorizada.'], 401);
        }
        return response()->json(['message' => 'Transação autorizada.', 'value' => $request->value]);
    }
}
