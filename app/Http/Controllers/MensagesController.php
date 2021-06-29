<?php

namespace App\Http\Controllers;

use App\Models\Mensajes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MensagesController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();/* id del usuario  */
        $contactoid = $request->contacto_id;/* id del contacto con el que tiene el chat */

        return Mensajes::select(
        DB::raw("IF(`from_id` = $userId, true, false) as written_by_me"),
        'id',
        'contenido',
        'created_at'
        )->where(function ($query) use ($contactoid,$userId) {
            $query->where('from_id',$userId)->where('to_id',$contactoid);
        })->orWhere(function ($query)  use ($contactoid,$userId){
            $query->where('from_id',$contactoid)->where('to_id',$userId);
        })->get();
    }

    public function store(Request $request)
    {
       $mensaje = new Mensajes();
       $mensaje -> from_id = Auth()->user()->id;
       $mensaje -> to_id = $request->to_id;
       $mensaje -> contenido = $request->contenido;
       $saved = $mensaje -> save();

       $data = [];
       $data['success'] = $saved;

       return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
