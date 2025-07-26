<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = Anggota::all();
        return view('frontend.admin.pages.approve_pendaftaran', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'nik' => 'required|digits:16|unique:anggotas,nik',
            'phone' => 'required|regex:/^[0-9+\-\s]{10,15}$/',
            'birth' => 'required|date|before:today',
            'darah' => 'required|in:A,B,AB,O',
            'address' => 'required|string|max:255',
            'pengcab' => 'required|string|max:100',
            'pengprov' => 'required|string|max:100',
            'prestasi' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'ktp' => 'required|file|mimes:pdf|max:2048',
            'kta' => 'required|file|mimes:pdf|max:2048',
        ]);
        // ==== Simpan image utama ====
        $image = $request->file('image');
        if ($image) {
            if (!Storage::disk('public')->exists('anggota')) {
                Storage::disk('public')->makeDirectory('anggota');
            }

            $imageName = uniqid() . time() . '-' . $image->getClientOriginalName();
            $imagePath = 'anggota/' . $imageName;
            $image = Image::read($image);
            Storage::disk('public')->put($imagePath, (string) $image->toWebp(90));
        } else {
            $imageName = "default.png";
        }

        // ==== Simpan file KTP (PDF) ====
        $ktpFile = $request->file('ktp');
        $ktpName = uniqid() . time() . '-' . $ktpFile->getClientOriginalName();
        $ktpPath = 'anggota/pdf/' . $ktpName;
        Storage::disk('public')->putFileAs('anggota/pdf', $ktpFile, $ktpName);

        // ==== Simpan file KTA (PDF) ====
        $ktaFile = $request->file('kta');
        $ktaName = uniqid() . time() . '-' . $ktaFile->getClientOriginalName();
        $ktaPath = 'anggota/pdf/' . $ktaName;
        Storage::disk('public')->putFileAs('anggota/pdf', $ktaFile, $ktaName);

        // ==== Simpan data ke DB ====
        $anggota = new Anggota();
        $anggota->name = $request->name;
        $anggota->nik = $request->nik;
        $anggota->phone = $request->phone;
        $anggota->birth = $request->birth;
        $anggota->darah = $request->darah;
        $anggota->address = $request->address;
        $anggota->pengcab = $request->pengcab;
        $anggota->pengprov = $request->pengprov;
        $anggota->prestasi = $request->prestasi;
        $anggota->image = $imageName;
        $anggota->ktp = $ktpName;
        $anggota->kta = $ktaName;
        $anggota->save();

        // Generate nomor setelah ID tersedia


        return redirect()->route('landing')->with(['pesan' => 'Pendaftaran diterima, menunggu proses verifikasi', 'level-alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        //
    }

    public function approve($id)
    {
        $anggota = Anggota::findOrFail($id);
        $id = str_pad($anggota->id, 4, '0', STR_PAD_LEFT);
        $tglLahir = \Carbon\Carbon::parse($anggota->birth)->format('d-m');
        $nomor = "HCBSC-{$id}.{$tglLahir}";
        // Buat QR code untuk keanggotaan
        $qrPath = 'qrcodes/' . $nomor . '.svg';
        Storage::disk('public')->put($qrPath, QrCode::format('svg')->size(300)->generate(route('keanggotaan.cek', ['query' => $nomor])));

        $anggota->status = 'verified';
        $anggota->nomor = $nomor;
        $anggota->qr_code = $anggota->nomor . '.png';
        $anggota->save();


        return redirect()->back()->with([
            'pesan' => 'Anggota telah disetujui.',
            'level-alert' => 'alert-success'
        ]);
    }

    public function reject($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->status = 'rejected';
        $anggota->save();

        return redirect()->back()->with([
            'pesan' => 'Anggota telah ditolak.',
            'level-alert' => 'alert-danger'
        ]);
    }
}
