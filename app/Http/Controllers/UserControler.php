<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserControler extends Controller
{
    /**
     * obtener todos los elementos y retorna la vista para su visualizacion.
     */
    public function index()
    {
        $users= User::all();
        dd($users);
    }

    //retorna la vista  con el formulario para poder crear un usuario 

    public function create()
    {
        $roles = Role::all();
        dd($roles);
        
    }

    /**
     * recibir solicitud de formalulario de creacion del elemento y creacion del registro
     * se recibe por un metodo POST en ese POST se resive un request
     */
    public function store(Request $request)
    {
        $user = new User;
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
        $user = User::find($id);
        dd($user);

    }

    /**
     * retorna la vista para editar un elemto en especifico 
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        dd($user);
    }

    /**
     * Update recibe la actualizacion de un elemto y actualiza el registro
     */
    public function update(Request $request, string $id)
    {
        $user = new User;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone=  $request->phone;
        //user->photo codigo para subir 
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id; 
    }

    /**
     * jjbceliminar un registro
     * delete
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        
    }

}

