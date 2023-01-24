<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merks = Merk::latest()->paginate(5);
return view('merks.index',compact('merks'))
->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            
            ]);
            // dd($request);
            Merk::create($request->all());
            return redirect()->route('merks.index')
            ->with('Berhasil','Merk Berhasil Di Input.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        return view('merks.show',compact('merk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit(Merk $merk)
    {
        return view('merks.edit',compact('merk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merk $merk)
    {
        $request->validate([
            'merk' => 'required',
            ]);
            $merk->update($request->all());
            return redirect()->route('merks.index')
            ->with('yey berhasil','Merk anda berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mek  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merk $merk)
    {
        $merk->delete();
return redirect()->route('merks.index')
->with('Berhasil','Merk Berhasil di hapus ahahaha');
    }
}
