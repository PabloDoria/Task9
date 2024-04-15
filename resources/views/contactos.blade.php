@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>

<x-app-layout>
    <x-slot name="header">

    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Lista de Contactos</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Contacto 1 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-xl font-semibold mb-2">Nombre: Juan Pérez</h2>
                <p>Casas: 5</p>
                <p>Número telefónico: 123-456-7890</p>
                <p>Ventas realizadas: 10</p>
                <p>Años de experiencia: 8</p>
            </div>

            <!-- Contacto 2 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-xl font-semibold mb-2">Nombre: María González</h2>
                <p>Casas: 8</p>
                <p>Número telefónico: 987-654-3210</p>
                <p>Ventas realizadas: 15</p>
                <p>Años de experiencia: 12</p>
            </div>

            <!-- Contacto 3 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-xl font-semibold mb-2">Nombre: José Martínez</h2>
                <p>Casas: 3</p>
                <p>Número telefónico: 456-789-0123</p>
                <p>Ventas realizadas: 5</p>
                <p>Años de experiencia: 4</p>
            </div>
            
            <!-- Agregar más contactos según sea necesario -->
        </div>
    </div>
    <x-footer />
</x-slot>
</x-app-layout>

@stop