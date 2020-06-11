<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class covidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $indo = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $indo->json();

        return view('index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function provinsi(Request $request)
    {
        if($request->has('provi')){
            $keyprovi  = $request->provi;
        }
        else{
            $keyprovi = "DKI Jakarta";
        }
        $prov = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $prov->json();

        return view('welcome', compact('data','keyprovi'));
    }

    public function global(Request $request)
    {
        if($request->has('dunia')){
            $keydunia  = $request->dunia;
        }
        else{
            $keydunia = "Indonesia";
        }
        $global = Http::get('https://api.kawalcorona.com');
        $data = $global->json();

        return view('global', compact('data','keydunia'));
    }
}
