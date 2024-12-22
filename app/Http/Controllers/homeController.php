<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class homeController extends Controller
{
    
    public function index (Request $request) {
       $users = [
        ['id' => '1', 'nom' => 'Elmallass' , 'metier' => 'developer'],
        ['id' => '2', 'nom' => 'Elansari' , 'metier' => 'developer'],
        ['id' => '3', 'nom' => 'Benihda' , 'metier' => 'developer']
       ];
        return view('home',compact('users'));
        
    }

}
