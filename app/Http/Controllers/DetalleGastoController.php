<?php

namespace App\Http\Controllers;
use App\Models\Gasto;
use App\Http\Controllers\Controller;
use App\Models\Detallegasto;
use Illuminate\Http\Request;

/**
 * Class DetallegastoController
 * @package App\Http\Controllers
 */
class DetallegastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallegastos = Detallegasto::paginate();

        return view('detallegasto.index', compact('detallegastos'))
            ->with('i', (request()->input('page', 1) - 1) * $detallegastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallegasto = new Detallegasto();
        $gastosList = Gasto::pluck('id', 'id');
        return view('detallegasto.create', compact('detallegasto','gastosList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detallegasto::$rules);

        $detallegasto = Detallegasto::create($request->all());

        return redirect()->route('detallegastos.index')
            ->with('success', 'Detallegasto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallegasto = Detallegasto::find($id);
        

        return view('detallegasto.show', compact('detallegasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallegasto = Detallegasto::find($id);
        $gastosList = Gasto::pluck('id', 'id');
        return view('detallegasto.edit', compact('detallegasto','gastosList'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detallegasto $detallegasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallegasto $detallegasto)
    {
        request()->validate(Detallegasto::$rules);

        $detallegasto->update($request->all());

        return redirect()->route('detallegastos.index')
            ->with('success', 'Detallegasto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallegasto = Detallegasto::find($id)->delete();

        return redirect()->route('detallegastos.index')
            ->with('success', 'Detallegasto deleted successfully');
    }
public function listar(){
    $gastosList = Gasto::pluck('id', 'id');
    return view('detallegastos.form', compact('gastosList'));
}

}
