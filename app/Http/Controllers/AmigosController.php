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
        return view('amigos.index', compact('amigos'));
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


    public function edit($id)
    {
        $amigo = Friends::find($id);
        return view('amigos.edit', compact('amigo'));
    }


    public function update(Request $request, $id)
    {
        $amigo = Friends::find($id);
        $amigo->name = $request->input('name');
        $amigo->email = $request->input('email');
        $amigo->save();

         return redirect('/amigos');
    }

    public function destroy($id)
    {
        $amigo = Friends::find($id);
        if ($amigo) {
            $amigo->delete();
            return redirect('/amigos')->with('success', 'Amigo deletado com sucesso!');
        } else {
            return redirect('/amigos')->with('error', 'Amigo não encontrado!');
        }
    }



    public function sorteio()
    {
        $amigos = Friends::all()->shuffle();

        $sorteio = [];

        while (count($amigos) > 1) {
            $amigo1 = $amigos->pop();
            $amigo2 = $amigos->pop();

            $sorteio[] = [
                'amigo1' => $amigo1->name,
                'amigo2' => $amigo2->name
            ];
        }

        // Caso haja um número ímpar de amigos, o último amigo será emparelhado com o primeiro da lista
        if (!$amigos->isEmpty()) {
            $sorteio[] = [
                'amigo1' => $amigos->first()->name,
                'amigo2' => $sorteio[0]['amigo1']
            ];
        }

        return view('amigos.sorteio', compact('sorteio'));
    }




}
