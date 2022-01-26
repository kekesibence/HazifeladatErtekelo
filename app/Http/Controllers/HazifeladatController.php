<?php

namespace App\Http\Controllers;

use App\Models\Hazifeladat;
use Illuminate\Http\Request;

class HazifeladatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $hazifeladats = Hazifeladat::orderBy('id')->get();
       return view('home', [ 'hazifeladats' => $hazifeladats ]);
       //return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'grade' => 'numeric|min:1|max:5',
            'url' => 'required',
            'comment' => 'required'
        ]);

        $adatok = $request->only(['name', 'grade', 'url', 'comment']);

        if ($validated) {
            $hazifeladat = new Hazifeladat();
            $hazifeladat->fill($adatok);
            $hazifeladat->save();
            return redirect()->route('hazifeladat.index');
        } else {
            return view('create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hazifeladat $hazifeladat)
    {
        return view('show', ['hazifeladat' => $hazifeladat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hazifeladat $hazifeladat)
    {
        return view('edit', ['hazifeladat' => $hazifeladat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hazifeladat $hazifeladat)
    {
        $adatok = $request->only(['name','grade', 'comment', 'url']);
        $validated = $request->validate([
            'name' => 'required',
            'grade' => 'numeric|min:1|max:5',
            'comment' => 'required',
            'url' => 'required'
        ]);

        if ($validated) {
            $hazifeladat->fill($adatok);
            $hazifeladat->save();
            return redirect()->route('hazifeladat.show', $hazifeladat->id);
        } else {
            return view('edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hazifeladat $hazifeladat)
    {
        $hazifeladat->delete();
        return redirect()->route('hazifeladat.index');
    }
}
