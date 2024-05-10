<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Friends;

class SeriesController extends Controller
{
public function index(Request $request)
{
    $series = Friends::all();
    // dd($series);
    return view('series.index', ['series' => $series]);
}


    public function create()
    {
        return view('series.create');
    }

public function store(Request $request)
{
    $nomeAmigo = $request->input('name');
    $emailAmigo = $request->input('email');

    $amigoExistente = Friends::where('email', $emailAmigo)->first();

    if ($amigoExistente) {

        return redirect('/series')->with('error', 'Email já existe!');
    }

    $amigo = new Friends();
    $amigo->name = $nomeAmigo;
    $amigo->email = $emailAmigo;
    $amigo->save();

    return redirect('/series');
}

}
