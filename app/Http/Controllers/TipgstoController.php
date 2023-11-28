<?php

namespace App\Http\Controllers;

use App\Models\Tipgsto;
use Illuminate\Http\Request;

/**
 * Class TipgstoController
 * @package App\Http\Controllers
 */
class TipgstoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipgstos = Tipgsto::paginate();

        return view('tipgsto.index', compact('tipgstos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipgstos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipgsto = new Tipgsto();
        return view('tipgsto.create', compact('tipgsto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipgsto::$rules);

        $tipgsto = Tipgsto::create($request->all());

        return redirect()->route('tipgstos.index')
            ->with('success', 'Tipgsto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipgsto = Tipgsto::find($id);

        return view('tipgsto.show', compact('tipgsto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipgsto = Tipgsto::find($id);

        return view('tipgsto.edit', compact('tipgsto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipgsto $tipgsto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipgsto $tipgsto)
    {
        request()->validate(Tipgsto::$rules);

        $tipgsto->update($request->all());

        return redirect()->route('tipgstos.index')
            ->with('success', 'Tipgsto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipgsto = Tipgsto::find($id)->delete();

        return redirect()->route('tipgstos.index')
            ->with('success', 'Tipgsto deleted successfully');
    }
}
