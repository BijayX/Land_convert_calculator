<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmiCalcontroller extends Controller
{
    public function convert(Request $request)
    {
        $ropani = $request->input('ropani');

        if (!is_numeric($ropani) || $ropani < 0) {
            return response()->json(['error' => 'Please enter a valid positive number for Ropani.'], 400);
        }
        $anna = $ropani * 16;
        $paisa = $ropani * 16 * 4;
        $daam = $ropani * 508.72;
        $squareMeter = $ropani * 508.74;
        $squareFeet = $ropani * 5476;
        // Return the result as JSON

       
    }
}
