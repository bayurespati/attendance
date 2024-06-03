<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function getNumber(Request $request)
    {
        $peserta = Peserta::where('email', $request->email)->with('meja')->first();

        if (!$peserta) {
            return Redirect::back()->withErrors(['msg' => 'Anda belum terdaftar']);
        }

        return view('show', ["peserta" => $peserta]);
    }

    public function show(Request $request)
    {
        $peserta = Peserta::where('email', "respatibayu48@pins.co.id")->with('meja')->first();

        return view('show', ["peserta" => $peserta]);
    }

    public function signUp(Request $request)
    {
        $peserta = new Peserta();
        $peserta->name = $request->name;
        $peserta->email = $request->email;
        $peserta->jabatan = $request->jabatan;
        $meja = Meja::where('is_taken', "=", 0)->first();
        $peserta->meja_id = $meja->id;
        $meja->is_taken = 1;
        $meja->save();
        $peserta->save();

        return view('show', ["peserta" => $peserta]);
    }
}
