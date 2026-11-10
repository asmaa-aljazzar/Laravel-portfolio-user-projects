<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PortfolioController extends Controller
{
    public function home()
    {
        $developer = User::find(1) ?? new User([
            'name' => 'Your name',
        ]);
        return view('portfolio.home', compact('developer'));
    }
}
