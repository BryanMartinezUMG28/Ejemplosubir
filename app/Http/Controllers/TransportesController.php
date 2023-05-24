<?php

namespace App\Http\Controllers;

use App\Models\Transportes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TransportesController extends Controller
{
    public function index()
    {
        $datos = Transportes::orderBy('id', 'desc')->paginate(25);
        return view('inicio', compact('datos'));
    }


    public function create()
    {
        return view('agregar');



    }


    public function store(Request $request)
    {
        $transportes = new Transportes();
        $transportes->id = $request->post('id');
        $transportes->nombre = $request->post('nombre');
        $transportes->razon_social  = $request->post('razon_social');
        $transportes->save();

        alert()->success('EXCELENTE','Haz agregado un nuevo transporte a la lista!');

        return redirect()->route('transportes.index')->with("success", "¡TRANSPORTE AGREGADO CON EXITO!");
    }


    public function show($id)
    {
        $transportes = Transportes::find($id);
        return view("eliminar", compact('transportes'));




    }


    public function edit($id)
    {
        $transportes = Transportes::find($id);
        return view("actualizar", compact('transportes'));
    }


    public function update(Request $request, $id)
    {
        $transportes = Transportes::find($id);
        $transportes->id = $request->post('id');
        $transportes->nombre = $request->post('nombre');
        $transportes->razon_social = $request->post('razon_social');
        $transportes->save();

        alert()->info('ACTUALIZACION','Actualizacion completada. Nota: Los datos no seran los mismos, ya han sido actualizados completamente.', );

        return redirect()->route("transportes.index")->with("success", "¡Actualizacion de transporte con exito");
    }


    public function destroy($id)
    {
        $transportes = Transportes::find($id);
        $transportes->delete();

        alert()->error('ELIMINADO','Transporte seleccionado ha sido eliminado.');
        return redirect()->route("transportes.index")->with("success", "¡Transporte eliminado con exito!");

    }


}
