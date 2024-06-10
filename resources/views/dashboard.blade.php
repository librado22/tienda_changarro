@extends('layouts.temple')

@section('title', 'Dashboard')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo">Retail Store</div>
        <nav class="navbar">
            <ul>
                <li><a href="#">Dashboards</a></li>
                <li><a href="#">Empleados</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Proveedores</a></li>
                <li><a href="#">ventas</a></li>
                <li><a href="#">entradas</a></li>
				
                
            </ul>
        </nav>
        <div class="profile">
            <span></span>
            <div class="profile-image"></div>
        </div>
    </header>

    
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
