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

    public function edit()
    {
        $developer = User::findOrFail(1);
        return view('portfolio.edit', compact('developer'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'skills' => 'required|string',
        ]);

        // skills will sends as a string so we split it
        $data['skills'] = array_values(array_filter(
            array_map('trim', preg_split('/\r\n|\r|\n/', $data['skills'])),
            fn($skill) => $skill !== ''
        ));

        User::findOrFail(1)->update($data);

        return redirect()->route('home')
            ->with('success', 'Profile updated successfully.');
    }
}
