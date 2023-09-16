@extends('layouts.app')

@section('content')



<div>
<body>
    <h1>hello {{ $name }}</h1>
    @if ($number == 5)
    <h3>el numero enviado es 5 </h3>
    @else
    <h3>el numero enviado es 5</h3>
        
    @endif
  @isset($day)
    @switch($day)

        @case($day == 'money')
        <h3>es lunes</h3>
            
            @break
        @case($day == 'thuesday')
        <h3> es martes </h3>
            
            @break
        @default
        <h3>es otro dia</h3>
               
    @endswitch
    @endisset 

    <div class="container">

       <h3>lista de usuarios</h3>

       <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">email</th>
            <th scope="col">telefono</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <th>{{ $user->fullname }}</th>
                <th>{{ $user->email}}</th>
                <th>{{ $user->telefono}}</th>
            </tr>
                
            @endforeach
        </tbody>
      </table>
        

    </div>
</div>
</body>
</html>