<?php

namespace App\Http\Controllers;

use App\Models\Detalleingreso;
use App\Models\Ingreso;
use Illuminate\Http\Request;

/**
 * Class DetalleingresoController
 * @package App\Http\Controllers
 */
class DetalleingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleingresos = Detalleingreso::paginate();

        return view('detalleingreso.index', compact('detalleingresos'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleingresos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleingreso = new Detalleingreso();
        $ingresoList = Ingreso::pluck('concepto', 'id');

        return view('detalleingreso.create', compact('detalleingreso','ingresoList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detalleingreso::$rules);

        $detalleingreso = Detalleingreso::create($request->all());

        return redirect()->route('detalleingresos.index')
            ->with('success', 'Detalleingreso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleingreso = Detalleingreso::find($id);

        return view('detalleingreso.show', compact('detalleingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleingreso = Detalleingreso::find($id);
        $ingresoList = Ingreso::pluck('descripcion', 'id');

        return view('detalleingreso.edit', compact('detalleingreso','ingresoList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detalleingreso $detalleingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalleingreso $detalleingreso)
    {
        request()->validate(Detalleingreso::$rules);

        $detalleingreso->update($request->all());

        return redirect()->route('detalleingresos.index')
            ->with('success', 'Detalleingreso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleingreso = Detalleingreso::find($id)->delete();

        return redirect()->route('detalleingresos.index')
            ->with('success', 'Detalleingreso deleted successfully');
    }
}
