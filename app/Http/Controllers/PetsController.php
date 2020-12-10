<?php

namespace App\Http\Controllers;

use App\Pets;
use App\Http\Requests\CreatePetsRequest;
use App\Http\Requests\UpdatePetsRequest;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    //GET. Listar registros
    public function index(Request $request)
    {
        if($request->has('txtBuscar'))
        {
            $pets = Pets::where('name', 'like', '%' . $request->txtBuscar .'%')            
            ->get();
        }
        else
        {
            $pets = Pets::all();
        }
        return $pets;
    }

    private function uploadFile($file)
    {
        $nameFile = time(). '.'. $file->getClientOriginalExtension();
        $file->move(public_path('images'), $nameFile);
        return $nameFile;
    }

    //POST. Insertar registros
    public function store(CreatePetsRequest $request)
    {
        $input = $request->all();
        if($request->has('image'))
            $input['image'] = $this->uploadFile($request->image);

        Pets::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado correctamente'
        ], 200);
    }
    
    //GET. Retornar un solo registro
    public function show(Pets $pet)
    {
        return $pet;
    }
    
    //PUT. Actualizar registros
    public function update(UpdatePetsRequest $request, Pets $pet)
    {
        $input = $request->all();
        if($request->has('image'))
            $input['image'] = $this->uploadFile($request->image);
            
        $pet->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro actualizado correctamente'
        ], 200);
    }
    
    //DELETE. Eliminar registros
    public function destroy($id)
    {
        Pets::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente'
        ], 200);
    }
}