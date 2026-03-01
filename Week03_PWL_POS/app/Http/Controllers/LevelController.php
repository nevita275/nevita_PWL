<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
   public function index()
    {
        // 1. UJI COBA INSERT
        //DB::insert('insert into m_level(level_id, level_kode, level_nama, created_at) values(?, ?, ?, ?)', [4, 'CUS', 'Pelanggan', now()]);
            //return 'Insert data baru berhasil';

        // 2. UJI COBA UPDATE 
        //$row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
            //return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';
        
        // 3. UJI COBA DELETE
        //$row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
            //return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';
        
        // 4. MENAMPILKAN DATA 
        $data = DB::select('select * from m_level');
            return view('level', ['data' => $data]);
    }
}
