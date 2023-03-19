<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function save(Request $request)
    {
        $numPlayers = $request->numPlayers;
        $playerPiece = $request->playerPiece;
        $playerColor = $request->playerColor;
        $specialRules = $request->specialRules;

        // Simpan setting ke file database 

        return redirect()->back()->with('success', 'Settings saved successfully!');
    }
}
