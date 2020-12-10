<?php

namespace App\Http\Controllers;

use App\Owners;
use App\Http\Requests\CreateOwnersRequest;
use App\Http\Requests\UpdateOwnersRequest;
use Illuminate\Http\Request;

class OwnersController extends Controller
{    
    // GET. Listar registros
    public function index(Request $request)
    {
        if($request->has('txtBuscar'))
        {
            $owners = Owners::where('name', 'like', '%' . $request->txtBuscar .'%')     
            ->orWhere('telephone', $request->txtBuscar)       
            ->get();
        }
        else
        {
            $owners = Owners::all();
        }
        return $owners;
    }
    
    // POST. Insertar registros
    public function store(CreateOwnersRequest $request)
    {
        $input = $request->all();        
        Owners::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado correctamente'
        ], 200);
    }
    
    //GET. Retornar un solo registro
    public function show(Owners $owner)
    {
        return $owner;
    }
    
    //PUT. Actualizar registros
    public function update(UpdateOwnersRequest $request, Owners $owner)
    {
        $input = $request->all();        
        $owner->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro actualizado correctamente'
        ], 200);
    }
    
    //DELETE. Eliminar registros
    public function destroy($id)
    {
        Owners::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente'
        ], 200);
    }
}