<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {  
     return $request->get('id');
      $series = [ 
        'Greys Anatomy',
        'Lost',
        'Agents of SHIELD'
      ];
  
      $html = "<ul>";
      foreach ($series as $serie) {
        $html .= "<li>$serie</li>";
      }
      $html .= "</ul>";
  
      return $html;
    }
}

?>