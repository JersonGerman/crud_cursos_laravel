@extends('layouts.plantilla')

@section('title', 'Curso edit')

@section('content')
    <h1>En esta página podrás editar un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('PUT')
        
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="" value="{{old('name', $curso->name)}}">
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
            <textarea type="text" name="description" id="">{{old('description', $curso->description)}}</textarea>
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
            <input type="text" name="category" id="" value="{{old('category', $curso->category)}}">
        </label>
        @error('category')
        <br>
        <small>*{{$message}}!</small>
        <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection

