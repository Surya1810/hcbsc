<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        $latest_news = Post::latest()->take(6)->get();

        return view('frontend.pages.landing', compact('latest_news'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function berita()
    {
        return view('frontend.pages.informasi.berita');
    }

    public function agenda()
    {
        $agendas = Agenda::all();

        return view('frontend.beranda.agenda', compact('agendas'));
    }

    public function pendaftaran_keanggotaan()
    {
        return view('frontend.pages.keanggotaan.pendaftaran');
    }

    public function cek_keanggotaan()
    {
        return view('frontend.pages.keanggotaan.cek');
    }

    public function atribut()
    {
        return view('frontend.pages.keanggotaan.atribut');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
