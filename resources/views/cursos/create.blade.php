@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}!</small>
            <br>
        @enderror

        <br>
        <label for="">
            Descripción:
            <br>
            <input type="text" name="description" id="" value="{{old('description')}}">
        </label>
        @error('description')
            <br>
            <small>*{{$message}}!</small>
            <br>
        @enderror

        <br>
        <label for="">
            Categoría:
            <br>
            <input type="text" name="category" id="" value="{{old('category')}}">
        </label>
        @error('category')
        <br>
        <small>*{{$message}}!</small>
        <br>
        @enderror
        <br>

        <button type="submit">Enviar formulario</button>
    </form>
@endsection

