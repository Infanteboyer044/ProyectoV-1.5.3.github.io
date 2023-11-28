<?php

namespace App\Http\Controllers;

use App\Models\Comp;
use App\Models\Gasto;
use App\Models\Oficina;
use App\Models\Tipgsto;
use Illuminate\Http\Request;

/**
 * Class GastoController
 * @package App\Http\Controllers
 */
class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::paginate();

        return view('gasto.index', compact('gastos'))
            ->with('i', (request()->input('page', 1) - 1) * $gastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gasto = new Gasto();
        $compList = Comp::pluck('numcomp', 'id');
        $tipgstoList = Tipgsto::pluck('nombre', 'id');
        $oficinaList = Oficina::pluck('nombre', 'id');

        return view('gasto.create', compact('gasto','compList', 'tipgstoList','oficinaList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gasto::$rules);

        $gasto = Gasto::create($request->all());

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gasto = Gasto::find($id);

        return view('gasto.show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gasto = Gasto::find($id);
        $compList = Comp::pluck('numcomp', 'id');
        $tipgstoList = Tipgsto::pluck('nombre', 'id');
        $oficinaList = Oficina::pluck('nombre', 'id');

        return view('gasto.edit', compact('gasto','compList','tipgstoList', 'oficinaList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gasto $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        request()->validate(Gasto::$rules);

        $gasto->update($request->all());

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gasto = Gasto::find($id)->delete();

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto deleted successfully');
    }
}
