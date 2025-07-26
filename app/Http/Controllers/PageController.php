<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Anggota;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        $latest = Post::latest()->take(3)->get();
        $beritas = Post::latest()->skip(3)->take(60)->paginate(6);

        return view('frontend.pages.landing', compact('latest', 'beritas'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function berita()
    {
        $latest = Post::latest()->take(3)->get();
        $beritas = Post::latest()->skip(3)->take(60)->paginate(6);

        return view('frontend.pages.informasi.berita', compact('latest', 'beritas'));
    }
    public function detail_berita($slug)
    {
        $latest = Post::latest()->take(3)->get();
        $news = Post::where('slug', $slug)->first();

        return view('frontend.pages.informasi.detail_berita',  compact('latest', 'news'));
    }

    public function agenda()
    {
        $agendas = Agenda::all();

        return view('frontend.pages.informasi.agenda', compact('agendas'));
    }

    public function galeri()
    {
        return view('frontend.pages.gallery');
    }

    public function pendaftaran_keanggotaan()
    {
        return view('frontend.pages.keanggotaan.pendaftaran');
    }

    public function cek_keanggotaan(Request $request)
    {
        $query = $request->input('query');

        $anggota = Anggota::where('nomor', $query)
            ->orWhere('name', 'like', '%' . $query . '%')
            ->first();

        return view('frontend.pages.keanggotaan.cek', compact('anggota'));
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
