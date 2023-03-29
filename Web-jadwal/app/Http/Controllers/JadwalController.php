<?php

namespace App\Http\Controllers;

use App\Http\Requests\JadwalRequest;
use App\Models\Jadwal;
use App\Models\jadwal as ModelsJadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    public function Home(Request $request)
    {
        $I = 1;

        $jadwal = Jadwal::paginate(5);
        return view('home.home', compact('jadwal', 'I'));
    }

    public function create()
    {
        $jadwal = Jadwal::all();
        return view('home.create', compact('jadwal'));
    }

    public function store(JadwalRequest $request)
    {
        $jadwal = Jadwal::create([
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'kegiatan' => $request->kegiatan,
        ]);

        

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $jadwal = jadwal::where('id', $id)->first();
        return view('home.edit', compact('jadwal'));
    }

    public function update(JadwalRequest $request, $id)
    {
        Jadwal::where('id', $id)->update([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
        ]);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $jadwal = Jadwal::where('id', $id)->delete();
        return redirect()->route('home');
    }
}
