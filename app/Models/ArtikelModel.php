<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    public function get_artikel() {
    $artikel = DB::table('artikel')->get();
    return $artikel;
	}

	public function save_artikel($data){
		unset($data["_token"]);
		$new_artikel = DB::table('artikel')->insert($data);
		return $new_artikel;
	}
}
