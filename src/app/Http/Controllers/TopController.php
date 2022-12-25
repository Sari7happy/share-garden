<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $place_data = Register::select('prefecture_name')
            ->selectRaw('COUNT(prefecture_name) as count_register')
            ->groupBy('prefecture_name')
            ->get();

        $place_data = json_decode($place_data, true);
        // dd($place_data);

        $genle_data = Register::select('genle_name')
            ->selectRaw('COUNT(genle_name) as count_registergenle')
            ->groupBy('genle_name')
            ->get();

        $genle_data = json_decode($genle_data, true);
        // dd($place_data);


        return view('top', compact('place_data', 'genle_data'));
    }
}
