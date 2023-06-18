@extends('layouts.app')
@section('title','Listagem do usuario')

@section('content')
<h1>Listagem do usuario: {{$user->name}} </h1>
<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    
</ul>
<form action="{{route('users.destroy',$user->id)}}" method="POST">
   @method('DELETE')
    @csrf
    
    <button type="submit">Deletar</button>
</form>

@endsection