<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {

    }

    public function authorizer(Request $request)
    {
        if ($request->value >= 100.0) {
            return response()->json(['message' => 'Transação não autorizada.'], 401);
        }
        return response()->json(['message' => 'Transação autorizada.', 'value' => $request->value]);
    }
}
