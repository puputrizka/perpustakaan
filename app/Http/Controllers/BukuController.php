<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

class BukuController extends Controller
{
    public function index() {
        return Buku::all();
    }

    public function detail($id) {
        return Buku::find($id);
    }

    public function insert(Request $request) {
        $data = new Buku;
        $data->judul = $request->judul;
        $data->pengarang = $request->pengarang;
        $data->save();
        return $data;
    }

    public function update(Request $request, $id) {
        $data = Buku::find($id);
        $data->judul = $request->judul;
        $data->pengarang = $request->pengarang;
        $data->save();
        return $data;
    }

    public function delete(Request $request, $id) {
        $data = Buku::find($id);
        $data->delete();
        return "Data deleted";
    }
}

