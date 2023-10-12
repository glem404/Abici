<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidos; 

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function prueba()
     {
         //
         return view ('administrador/pedido');
     }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function verificar()
    {
        //
        return view ('pedidos/crearpedido');
    }

    public function create()
    {
        //
        return view ('pedidos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        // Crear un nuevo pedido con los datos del formulario
        $pedido = new pedidos();
        $pedido->idcliente = $request->input('idcliente');
        $pedido->iddomiciliario = $request->input('iddomiciliario');
        $pedido->idadministracion = $request->input('idadministracion');
        $pedido->direccion = $request->input('direccion');
        $pedido->fechahora = $request->input('fechahora');
        $pedido->productos = $request->input('productos');
        $pedido->tiempoestimadomin = $request->input('tiempoestimadomin');
        $pedido->horaestimada = $request->input('horaestimada');
        $pedido->descripcionproductos = $request->input('descripcionproductos');
    
        // Guardar el pedido en la base de datos
        $pedido->save();
    
        // Redirigir a la página de inicio o a donde desees después de guardar el pedido
        return redirect()->route('dashboard')->with('success', 'Pedido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
