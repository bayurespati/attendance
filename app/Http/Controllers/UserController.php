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
        return $this->hold();
        $peserta = Peserta::where('email', $request->email)->with('meja')->first();

        if (!$peserta) {
            return Redirect::back()->withErrors(['msg' => 'Anda belum terdaftar']);
        }

        $peserta->status = 1;
        $peserta->save();

        return view('show', ["peserta" => $peserta]);
    }

    public function show(Request $request)
    {
        return $this->hold();
        $peserta = Peserta::where('email', "respatibayu48@gmail.com")->with('meja')->first();

        return view('show', ["peserta" => $peserta]);
    }

    public function admin(Request $request)
    {
        $datas = Peserta::with('meja')->get();
        $meja = Meja::where('is_taken', 0)->get();
        return view('admin', ["datas" => $datas, "meja" => $meja]);
    }

    public function signUp(Request $request)
    {
        return $this->hold();
        $peserta = Peserta::where('email', $request->email)->first();
        if ($peserta) {
            return Redirect::back()->withErrors(['msg' => 'Email anda sudah terdaftar']);
        }

        $peserta = new Peserta();
        $peserta->name = $request->name;
        $peserta->email = $request->email;
        $peserta->jabatan = $request->jabatan;
        $peserta->status = 1;
        $meja = Meja::where('is_taken', "=", 0)->first();
        $peserta->meja_id = $meja->id;
        $meja->is_taken = 1;
        $meja->save();
        $peserta->save();

        return view('show', ["peserta" => $peserta]);
    }

    public function hold()
    {
        return Redirect::back()->withErrors(['msg' => 'Under develop']);
    }
}
