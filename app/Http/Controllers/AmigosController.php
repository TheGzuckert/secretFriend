<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Friends;

class AmigosController extends Controller
{
public function index(Request $request)
{
    $amigos = Friends::all();
    return view('amigos.index', ['amigos' => $amigos]);
}

    public function create()
    {
        return view('amigos.create');
    }

    public function store(Request $request)
    {
        $nomeAmigo = $request->input('name');
        $emailAmigo = $request->input('email');

        $amigoExistente = Friends::where('email', $emailAmigo)->first();

        if ($amigoExistente) {

            return redirect('/amigos')->with('error', 'Email já existe!');
        }

        $amigo = new Friends();
        $amigo->name = $nomeAmigo;
        $amigo->email = $emailAmigo;
        $amigo->save();

        return redirect('/amigos');
    }

}
