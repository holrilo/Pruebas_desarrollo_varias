<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleado::paginate(1);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            //el comodin es (:attibute) para que tome el valor por defecto de arriba de los campos
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        // nos muestra dotos los datos 
        //$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');
        //hasfile para ver si existe un archivo 
        if ($request->hasFile('Foto')) {
            # code...
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleado::insert($datosEmpleado);
        //return response()->json($datosEmpleado);
        return redirect('empleado')->with('mensaje','Empleado Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
//    public function edit(Empleado $empleado)
public function edit($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Empleado $empleado)
public function update(Request $request, $id)
    {
        //

        $campos=[
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            
        ];
        $mensaje=[
            //el comodin es (:attibute) para que tome el valor por defecto de arriba de los campos
            'required'=>'El :attribute es requerido',
            
        ];

        if ($request->hasFile('Foto')) {
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=[
                //el comodin es (:attibute) para que tome el valor por defecto de arriba de los campos
                
                'Foto.required'=>'La foto requerida'
            ];
        }


        $this->validate($request,$campos,$mensaje);


        $datosEmpleado = request()->except('_token','_method');
        if ($request->hasFile('Foto')) {
            # code...
            $empleado=Empleado::findOrFail($id);
            Storage::delete(['public/uploads/'. $empleado->Foto]);
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleado::where('id','=',$id)->update($datosEmpleado);
        $empleado=Empleado::findOrFail($id);
        //return view('empleado.edit', compact('empleado'));
        return redirect('/empleado')->with('mensaje','Empleado Modificado con Exito');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Empleado $empleado)
    public function destroy($id)
    {
        //

        $empleado=Empleado::findOrFail($id);
        if (Storage::delete(['public/'.$empleado->Foto])) {
            # code...
            Empleado::destroy($id);
        }

        
        return redirect('/empleado')->with('mensaje','Empleado Borrado con Exito');;
    }
}
