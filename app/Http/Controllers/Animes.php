<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animes extends Controller
{
    public function listarAnimes()
    {
        $animes = [
            'Bleach',
            'Log Horizon',
            'One Piece'
        ];

        $html = "<ul>";
        foreach ($animes as $anime) {
            $html .= "<li>$anime</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
