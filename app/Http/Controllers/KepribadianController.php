<?php

namespace dev\Http\Controllers;

use Illuminate\Http\Request;
use dev\Http\Requests;
use dev\Http\Controllers\Controller;
use dev\Models;
use dev\Http\Models\Jawaban;
use dev\Http\Models\Pertanyaan;
use dev\Http\Requests\KepribadianRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class KepribadianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->data['pertanyaan']      = Models\Pertanyaan::all();
        $this->data['jawaban']         = Models\Jawaban::all();
    }
    public function index()
    {
        //
        return view('kepribadian/index', $this->data);
    }

    public function apiPertanyaan()
    {
        $data = DB::select("select * from pertanyaan");
        return response()->json($data);
    }

    public function apiJawaban()
    {
        $data = DB::select("select * from jawaban");
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(KepribadianRequest $request)
    {
        //
       $data = $request->all();
       
      $nama = $data['nama'];
      if($data["gender"] == "L"){
       $kelamin = "Laki - laki";
      }
      else{
       $kelamin = "Perempuan";
      }
      $tanggal = $data['ttl'];

       $analisa ="";
        foreach ($data['jawaban'] as $key) {
            $hasil   = DB::select("select analisa from jawaban where idjawaban = $key");
            $analisa = $analisa.$hasil[0]->analisa;
        }


       return view('hasil',['hasil' => $analisa, 'nama' => $nama, 'ttl' => $tanggal, 'kelamin' => $kelamin]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
