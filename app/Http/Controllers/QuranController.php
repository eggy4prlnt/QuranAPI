<?php

namespace App\Http\Controllers;

use App\Ayat;
use App\Surat;

class QuranController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showSurat($last, $next)
    {
      $get = Surat::where('id', '>', $last)->limit($next)->get();
      return response()->json($get, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function showAyat($id_surat, $last, $next)
    {
      $get = Ayat::where('id_surat', $id_surat)->where('ayat', '>', $last)->limit($next)->get();
      return response()->json($get, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }
}
