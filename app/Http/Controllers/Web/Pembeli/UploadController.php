<?php

namespace App\Http\Controllers\Web\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
		$foto_pembeli = Pembeli::get();
		return view('upload',['foto_pembeli' => $foto_pembeli]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'foto_pembeli' => 'required|foto_pembeli|image|mimes:jpeg,png,jpg|max:2048',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$foto_pembeli = $request->foto_pembeli('file');

		$nama_file = time()."_".$foto_pembeli->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$foto_pembeli->move($tujuan_upload,$nama_file);

		Pembeli::create([
			'foto_pembeli' => $nama_file,
		]);

		return redirect()->back();
	}
}
