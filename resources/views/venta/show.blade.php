@extends('layouts.app')

@section('title', 'Inicio - El changarro')

@section('content')
<header class="bg-light py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/image.png') }}" alt="El changarro logo" style="width: 100px; height: auto;">
                <span class="h4">EL changarro</span>
            </a>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Acerca de</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Bienvenido a EL changarro</h1>
        <p>Lo mejor en bebidas y alimentos.</p>
        <a href="{{ url('/register') }}" class="btn btn-light btn-lg">Regístrate Ahora</a>
    </div>
</section>

<section class="about py-5">
    <div class="container">
        <h2>Sobre Nosotros</h2>
        <p>Somos una empresa dedicada a la venta de productos abarrotera contando con la mejor calidad de productos...</p>
    </div>
</section>

<section class="services py-5 bg-light">
    <div class="container">
        <h2>Servicios</h2>
        <ul class="list-unstyled">
            <li>Servicio de calidad en nuestros productos.</li>
            <li>Servicio de calidad hacia nuestros clientes.</li>
        </ul>
    </div>
</section>

<section class="testimonials py-5">
    <div class="container">
        <h2>Quejas y Sugerencias</h2>
        <blockquote class="blockquote">
            <p class="mb-0">"Es una empresa muy dedicada a su trabajo con los mejores productos."</p>
            <footer class="blockquote-footer">Cliente Satisfecho</footer>
        </blockquote>
    </div>
</section>

<section class="contact py-5 bg-light">
    <div class="container">
        <h2>Contacto</h2>
        <form action="{{ url('/contact') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>

<footer class="bg-dark text-white py-3">
    <div class="container">
        <p class="mb-0">&copy; 2024 Mi Proyecto.</p>
        <nav class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Inicio</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">Acerca de</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ url('/services') }}">Servicios</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ url('/contact') }}">Contacto</a></li>
        </nav>
    </div>
</footer>
@endsection
s