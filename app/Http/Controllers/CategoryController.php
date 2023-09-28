<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UserControler extends Controller
{
    /**
     * obtener todos los elementos y retorna la vista para su visualizacion.
     */
    public function index()
    {
        $categories= Category::all();
        dd($categories);
    }

    //retorna la vista  con el formulario para poder crear un usuario 

    public function create()
    {
        
        
    }

    /**
     * recibir solicitud de formalulario de creacion del elemento y creacion del registro
     * se recibe por un metodo POST en ese POST se resive un request
     */
    public function store(Request $request)
    {
        $user = new Category;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone=  $request->phone;
        //user->photo codigo para subir 
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        if($user->save()){
            //redireccionar a la vista index

        }

    }

    /**
     * retorna la vista para visualizar un elemeto 
     */
    public function show(string $id)
    {
        $categories = Category::find($id);
        dd($categories);

    }

    /**
     * retorna la vista para editar un elemto en especifico 
     */
    public function edit(string $id)
    {
        $categories = Category::find($id);
        dd($categories);
    }

    /**
     * Update recibe la actualizacion de un elemto y actualiza el registro
     */
    public function update(Request $request, string $id)
    {
        $categories = new Category;
        $categories->fullname = $request->fullname;
        $categories->email = $request->email;
        $categories->phone=  $request->phone;
        //user->photo codigo para subir 
        $categories->password = bcrypt($request->password);
        $categories->role_id = $request->role_id; 
    }

    /**
     * jjbceliminar un registro
     * delete
     */
    public function destroy(string $id)
    {
        $categories = Category::find($id);
        $categories->delete();
        
    }

}

