@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>

<x-app-layout>
    <x-slot name="header">

    <div class="container mx-auto py-6">
        <div class="flex flex-col md:flex-row items-center justify-center">
            <div class="md:w-1/2 text-center md:text-left mb-6 md:mb-0">
            <h1 class="text-6xl md:text-7xl font-bold text-gray-800 mb-6">HomeSeeker</h1>
                <p class="text-lg text-gray-700 mb-4">Somos una empresa dedicada a ayudarte a encontrar la casa de tus sueños. Con una amplia selección de propiedades y un equipo de expertos en bienes raíces, estamos aquí para hacer que tu búsqueda de hogar sea fácil y emocionante.</p>
                <p class="text-lg text-gray-700">¡Déjanos ser tu guía en el camino hacia tu nuevo hogar!</p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/vendedor.jpg') }}" alt="Vendedor" class="w-full md:w-auto mx-auto rounded-lg shadow-md">
            </div>
        </div>
    </div>


<x-footer />
</x-slot>
</x-app-layout>

@stop