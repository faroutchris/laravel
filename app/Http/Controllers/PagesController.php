<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about () {
        
        $data = [
            'name' => 'Christo'    
        ];
        
        return view('pages.about')->with($data);
    }
    
    
}