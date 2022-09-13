<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJogadorRequest;
use App\Http\Requests\UpdateJogadorRequest;
use Illuminate\Support\Facades\Response;
use App\Models\Jogador;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogador = Jogador::with('equipe')->get();
        return Response::json($jogador);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJogadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJogadorRequest $request)
    {
        $jogador = $request->validated();
        return Response::json(Jogador::create($jogador));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jogador  $jogador
     * @return \Illuminate\Http\Response
     */
    public function show(Jogador $jogador)
    {
        return Response::json($jogador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJogadorRequest  $request
     * @param  \App\Models\Jogador  $jogador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJogadorRequest $request, Jogador $jogador)
    {
        $jogador->update($request->validated());
        return Response::json($jogador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jogador  $jogador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jogador $jogador)
    {
        $jogador->delete();
    }
}
