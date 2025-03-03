<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class DashboardController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function menu(){
        return view('menu');
    }

    public function dashboard(Request $request) {
        $query = Alumni::query();
    
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }
    
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nisn', 'like', '%' . $request->search . '%')
                  ->orWhere('nama', 'like', '%' . $request->search . '%');
            });
        }
    
        $alumnis = $query->get(); // Ambil data
    
        return view('dashboard', compact('alumnis')); // Kirim ke view
    }
    

       

    
    
    
}
