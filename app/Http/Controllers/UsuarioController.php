<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $usuarios = new Usuario();
        $usuarios->key_usuario= 'null';
        $usuarios->nom_usuario_1 = $request->get('nom_usuario_1');
        $usuarios->nom_usuario_2 = $request->get('nom_usuario_2');
        $usuarios->ape_usuario_1 = $request->get('ape_usuario_1');
        $usuarios->ape_usuario_2 = $request->get('ape_usuario_2');
        $usuarios->correo_usuario = $request->get('correo_usuario');
        $usuarios->tel_usuario = $request->get('tel_usuario');
        $usuarios->clav_usuasio = $request->get('clav_usuasio');
        $usuarios->id_perfil_usu = $request->get('id_perfil_usu');
        $usuarios->estado_id_estado = $request->get('estado_id_estado');
        $usuarios->fecha_creacion = '2021-10-14';
        
        $usuarios->save();
        return redirect('/');
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
