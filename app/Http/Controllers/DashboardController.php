<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class DashboardController extends Controller
{
    public function home(){
        return view ('welcome');
    }

    public function menu(){
        return view ('menu');
    }

    public function dashboard() {
        $alumnis = \App\Models\Alumni::all();
        return view('dashboard', compact('alumnis'));
    }
    
}
