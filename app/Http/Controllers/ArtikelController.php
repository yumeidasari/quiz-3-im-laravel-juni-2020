<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use App\Models\UserModel;

class ArtikelController extends Controller
{
    public function index()
    {
        $semua_artikel = ArtikelModel::orderby('id','DESC')->paginate(3); //orderby untuk menampilkan berdasarkan kehendak user
        //return $semua_pertanyaan;
        return view('artikel/index', compact('semua_artikel')); 
    }

    public function create()
    {
        return view('artikel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel_baru = new ArtikelModel;
        $artikel_baru->judul = $request->judul;
        $artikel_baru->isi = $request->isi;
        //untuk sementara user_id set 1 (ga keburu)
        $artikel_baru->user_id = 1;

        $lower = strtolower($request->slug);
        $arrSlug = explode(" ", $lower);
        $strSlug = "";

        for($i=0; $i<count($arrSlug); $i++)
        {
                if($i == count($arrSlug)-1)
                { $strSlug .= $arrSlug[$i];break;}
                $strSlug .= $arrSlug[$i]."-";

                
        }

        $artikel_baru->slug = $strSlug;
        $artikel_baru->tag = $request->tag;

        $artikel_baru->save();

        return redirect()
            ->to('/artikel/create')
            ->with('pesan', 'Berhasil Menyimpan');
    }

    public function show($id)
    {
        $artikel = ArtikelModel::findOrFail($id);
       

        return view('artikel/show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = ArtikelModel::findOrFail($id);
        return view('artikel/edit', compact('artikel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = ArtikelModel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->save();
        return redirect("artikel")
            ->with("pesan", "Berhasil mengedit artikel");
    }
}
