<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - "El changarro"</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/image.png') }}" alt="El changarro logo" style="width: 500px; height: auto;">
                "EL changarro"
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/about') }}">Acerca de</a></li>
                <li><a href="{{ url('/services') }}">Servicios</a></li>
                <li><a href="{{ url('/contact') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Bienvenido a "EL changarro "</h1>
        <p>Lo mejor en bebidas y alimentos.</p>
        <a href="{{ url('/register') }}" class="cta-button">Regístrate Ahora</a>
    </section>

    <section class="about">
        <h2>Sobre Nosotros</h2>
        <p>Somos una empresa dedicada a la venta de productos abarrotera...</p>
    </section>

    <section class="services">
        <h2>Servicios</h2>
        <ul>
            <li>Servicio de calidad en nuestros productos: </li>
            <li>Servicio de calidad hacia nuestros clientes: </li>
            
        </ul>
    </section>

    <section class="testimonials">
        <h2>Testimonios</h2>
        <blockquote>
            <p>"Este es el mejor servicio que he utilizado..."</p>
            <cite>Cliente Satisfecho</cite>
        </blockquote>
    </section>

    <section class="contact">
        <h2>Contacto</h2>
        <form action="{{ url('/contact') }}" method="post">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Mi Proyecto. Todos los derechos reservados.</p>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/about') }}">Acerca de</a></li>
                <li><a href="{{ url('/services') }}">Servicios</a></li>
                <li><a href="{{ url('/contact') }}">Contacto</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
