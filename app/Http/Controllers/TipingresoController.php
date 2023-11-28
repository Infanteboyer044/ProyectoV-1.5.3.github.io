<?php

namespace App\Http\Controllers;

use App\Models\Tipingreso;
use Illuminate\Http\Request;

/**
 * Class TipingresoController
 * @package App\Http\Controllers
 */
class TipingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipingresos = Tipingreso::paginate();

        return view('tipingreso.index', compact('tipingresos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipingresos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipingreso = new Tipingreso();
        return view('tipingreso.create', compact('tipingreso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipingreso::$rules);

        $tipingreso = Tipingreso::create($request->all());

        return redirect()->route('tipingresos.index')
            ->with('success', 'Tipingreso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipingreso = Tipingreso::find($id);

        return view('tipingreso.show', compact('tipingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipingreso = Tipingreso::find($id);

        return view('tipingreso.edit', compact('tipingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipingreso $tipingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipingreso $tipingreso)
    {
        request()->validate(Tipingreso::$rules);

        $tipingreso->update($request->all());

        return redirect()->route('tipingresos.index')
            ->with('success', 'Tipingreso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipingreso = Tipingreso::find($id)->delete();

        return redirect()->route('tipingresos.index')
            ->with('success', 'Tipingreso deleted successfully');
    }
}
