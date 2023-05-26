<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function getStatusLaundry($id)
    {
        $laundry = Laundry::find($id);

        if (!$laundry) {
            return response()->json(['message' => 'Laundry not found'], 404);
        }

        // Kembalikan data status laundry kepada pelanggan
        return response()->json(['status' => $laundry->status]);
    }
}
