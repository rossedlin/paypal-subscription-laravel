<?php

namespace App\Http\Controllers;

class PayPalController extends Controller
{
    /**
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function index()
    {
        return view('checkout');
    }
}
