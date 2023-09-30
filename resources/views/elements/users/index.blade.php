@extends('layouts.app')
@section('title','novaTV - Lista de usuarios')

@section('content')
<div class= 'rom'>


    <div class="col-md10 offset-md-1" >
        <h1><i class= 'fa fa_users'></i> Lista de usuarios </h1>
        <hr>

        <a href="{{route('user.create') }}" class="btn btn-primary my-3" style="background:#2980B9 "></a>
        <i class= "fa fa-plus pr-2"></i>
        Agregar Usuarios 
    </div>

    @isset($users)
    @if(count(users)> o)
 <table class="table table-striped-hower ">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">correo</th>
        <th scope="col">telefono</th>
        <th scope="col">fecha de creacion</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($users as $users)

       <tr>
        <td>{{ $users->id }}</td>
        <td>{{ $users->fullname }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->phone}}</td>
        <td>{{ $users->create_at}}</td>
        <td>
               <a href="{{ route('users.show',$user->id)}}"class="btn btn-sm btn-light"><i class="fa fa_search"></i></a> 
               <a href="{{ route('users.edit',$user->id)}}"class="btn btn-sm btn-light"><i class="fa fa-pen"></i></a>
               <form action="{{ route('users.destroy',$user) }}" method="post" class="d-inline">
               
                @csrf
                @method('delete')
                <button type= "submnit" class ="btn btn-sm btn-danger btn-delete"> <i class="fa fa-trash"></i></button>
            
            
            </form>
        </td>   
        
       @endforeach
    </tbody>
   

 </table>
 {{ $users->links() }}

    @else

     <div class="alert-warning my-4" role= "alert">
        aun no hay usuarios registrados en el sistema 
     </div>


        
    @endisset

</div>