@extends('layouts.app')
@section('title','Listagem dos usuarios')

@section('content')
<h1>Listagem dos usuarios
(<a href="{{route('users.create')}}">+</a>)

</h1>

<form action="{{route('users.index')}}" method="get">

    <input type="text" name="search" id="" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>

<ul>
    @foreach($users as $user)
        <li>
            {{$user->name}} -
            {{$user->email}}
            |<a href="{{route('users.show',$user->id)}}">Detalhes</a>
            |<a href="{{route('users.edit',$user->id)}}">editar</a>
        </li>
    @endforeach
</ul>
@endsection