<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuliah;
use App\Quran;
use App\Hadith;
use App\Makluman;
use App\AkaunBank;

class MainController extends Controller
{
    public function maindisplay()
    {
        $maklumans = Makluman::get();
        // dd($kuliahs->all());
        return view('solat')->with('maklumans', $maklumans);
    }


    public function senaraikuliah()
    {
        $kuliahs = Kuliah::get();
        // dd($kuliahs->all());
        return view('kuliah')->with('kuliahs', $kuliahs);
    }

    public function tambahkuliah()
    {
        return view('tambahkuliah');
    }

    public function insertkuliah(Request $request)
    {
        $add = new Kuliah();
        $add->tajuk = $request->tajuk;
        $add->tarikh = $request->tarikh;
        $add->penceramah = $request->penceramah;
        $add->gambar = 'public/gambar';
        $add->status = $request->status;
        $add->save();
        return redirect('kuliah');
    }

    //-------------------------------SUMBANGAN START--------------------------------

    public function tambahakaunbank()
    {
        return view('tambahakaunbank');
    }

    public function insertakaunbank(Request $request)
    {
        $add = new AkaunBank();
        $add->akaun_no = $request->akaun_no;
        $add->save();
        return redirect('tambahakaunbank');
    }

    //-------------------------------SUMBANGAN END--------------------------------

    //-------------------------------MAKLUMAN START--------------------------------

    public function tambahmakluman()
    {
        return view('tambahmakluman');
    }

    public function insertmakluman(Request $request)
    {
        $add = new Makluman();
        $add->makluman = $request->makluman;
        $add->save();
        return redirect('tambahmakluman');
    }

    //-------------------------------MAKLUMAN END--------------------------------

    //-------------------------------QURAN START--------------------------------
    
    public function tambahquran()
    {
        return view('tambahquran');
    }

    public function insertquran(Request $request)
    {
        $add = new Quran();
        $add->ayat = $request->ayat;
        $add->maksud = $request->maksud;
        $add->surah = $request->surah;
        $add->save();
        return redirect('tambahquran');
    }

    //-------------------------------QURAN END--------------------------------

    //-------------------------------HADITH START--------------------------------
    
    public function tambahhadith()
    {
        return view('tambahhadith');
    }

    public function inserthadith(Request $request)
    {
        $add = new Hadith();
        $add->ayat = $request->ayat;
        $add->maksud = $request->maksud;
        $add->riwayat = $request->riwayat;
        $add->save();
        return redirect('tambahhadith');
    }

    //-------------------------------HADITH END--------------------------------
   
}
