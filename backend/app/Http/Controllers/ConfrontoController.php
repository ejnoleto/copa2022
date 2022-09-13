<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConfrontoRequest;
use App\Http\Requests\UpdateConfrontoRequest;
use Illuminate\Support\Facades\Response;
use App\Models\Confronto;

class ConfrontoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confronto = Confronto::with('equipe_casa', 'equipe_visitante', 'vencedor')->get();
        return Response::json($confronto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConfrontoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfrontoRequest $request)
    {
        $confronto = $request->validated();
        return Response::json(Confronto::create($confronto));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Confronto  $confronto
     * @return \Illuminate\Http\Response
     */
    public function show(Confronto $confronto)
    {
        return Response::json($confronto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfrontoRequest  $request
     * @param  \App\Models\Confronto  $confronto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfrontoRequest $request, Confronto $confronto)
    {
        $confronto->update($request->validated());
        return Response::json($confronto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Confronto  $confronto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confronto $confronto)
    {
        $confronto->delete();
    }
}
