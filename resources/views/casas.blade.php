@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>

<x-app-layout>
    <x-slot name="header">


<!-- resources/views/mostrar_imagenes.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Imágenes</title>
    <style>
        .image-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px auto;
        }
        .image-grid img {
            width: 30%; /* Ajusta el tamaño de la imagen según sea necesario */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Galería de imágenes</h1>

    <div class="image-grid">
        @for ($i = 1; $i <= 6; $i++)
            <img src="{{ asset('images/casa'.$i.'.jpg') }}" alt="Casa {{ $i }}">
        @endfor
    </div>
</body>
</html>
<x-footer />
</x-slot>
</x-app-layout>

@stop