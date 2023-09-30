@extends('layouts.app')
@section('title','NovaTV - home')
@section('contect')

<div class = 'row'>
    <div class = "col-md-10 offset-md-1 ">
        <div class = "card">
            <img class ="my-2 img top -card "width="500px" src="{{ asset("images/elements/dashboard.svg") }}" alt="img dashboard">
              <div class= "card header- novatv text-center ">
              <h4>
                 <i class="fa fa -clipboard-list"></i>
                 escritorio
                 <small>
                <i class= "fas fa-user.ninja "></i> administrador 
                 </small>
              </h4>
              </div>

             <div class= "card-body row " >
                <div class= "col-md-4 my-4">
                    <div class= "card text-center" >
                    <img src="{{ asset('images/elemts/users.svg') }}" alt="users"  width="200px" class=" my-2 img-top-card">
                    <div class= 'card-body'>
                       <a href="#" class= "{{ route (users.index)}}" style="background-color:#2980B9 ">
                       <i class= "fa fa-users ">
                           modulo Usuarios 
                       </i>
                       </a>
                    </div>
                </div>  
                </div>
                  {{--  --}}
                  <div class= "col-md-4 my-4">
                    <div class= "card text-center" >
                    <img src="{{ asset('images/elemts/categories.svg') }}" alt="categories"  width="200px" class=" my-2 img-top-card">
                    <div class= 'card-body'>
                       <a href="#" class= " btn  btn-primary btn-block" style="background-color:#2980B9 ">
                       <i class= "fa fa-list-alt">
                           modulo modulo categorias

                       </i>
                       </a>
                    </div>
                </div>  
                </div>
                {{--  --}}
                <div class= "col-md-4 my-4">
                    <div class= "card text-center" >
                    <img src="{{ asset('images/elemts/movies.svg') }}" alt="movies"  width="200px" class=" my-2 img-top-card">
                    <div class= 'card-body'>
                       <a href="#" class= " btn  btn-primary btn-block" style="background-color:#2980B9 ">
                       <i class= "fa fa-film">
                           modulo peliculas
                       </i>
                       </a>
                    </div>
                </div>  
                </div>

             </div>


        </div>
    </div>

</div>