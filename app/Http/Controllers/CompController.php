<?php

namespace App\Http\Controllers;

use App\Models\Comp;
use Illuminate\Http\Request;

/**
 * Class CompController
 * @package App\Http\Controllers
 */
class CompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comps = Comp::paginate();

        return view('comp.index', compact('comps'))
            ->with('i', (request()->input('page', 1) - 1) * $comps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comp = new Comp();
        return view('comp.create', compact('comp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comp::$rules);

        $comp = Comp::create($request->all());

        return redirect()->route('comps.index')
            ->with('success', 'Comp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comp = Comp::find($id);

        return view('comp.show', compact('comp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comp = Comp::find($id);

        return view('comp.edit', compact('comp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comp $comp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comp $comp)
    {
        request()->validate(Comp::$rules);

        $comp->update($request->all());

        return redirect()->route('comps.index')
            ->with('success', 'Comp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comp = Comp::find($id)->delete();

        return redirect()->route('comps.index')
            ->with('success', 'Comp deleted successfully');
    }
}
