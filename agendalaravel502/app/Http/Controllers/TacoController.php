<?php

namespace App\Http\Controllers;

use App\Models\Taco;
use Illuminate\Http\Request;

/**
 * Class TacoController
 * @package App\Http\Controllers
 */
class TacoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tacos = Taco::paginate();

        return view('taco.index', compact('tacos'))
            ->with('i', (request()->input('page', 1) - 1) * $tacos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taco = new Taco();
        return view('taco.create', compact('taco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Taco::$rules);

        $taco = Taco::create($request->all());

        return redirect()->route('tacos.index')
            ->with('success', 'Taco created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taco = Taco::find($id);

        return view('taco.show', compact('taco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taco = Taco::find($id);

        return view('taco.edit', compact('taco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Taco $taco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taco $taco)
    {
        request()->validate(Taco::$rules);

        $taco->update($request->all());

        return redirect()->route('tacos.index')
            ->with('success', 'Taco updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $taco = Taco::find($id)->delete();

        return redirect()->route('tacos.index')
            ->with('success', 'Taco deleted successfully');
    }
}
