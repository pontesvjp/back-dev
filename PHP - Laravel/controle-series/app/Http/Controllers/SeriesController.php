<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $resquest)
    {
        $series = [
            'Brooklyn 99',
            'Breaking Bad',
            'Stranger Things',
        ];

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }
}
