<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>El changarro</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
    <style>
        body.sidebar-collapse .main-panel {
            margin-left: 80px;
        }
        .sidebar-collapse .nav-link {
            display: none;
        }
        .cart {
            position: absolute;
            right: 20px;
            top: 20px;
            cursor: pointer;
        }
        .cart-content {
            position: fixed;
            top: 0;
            right: 0;
            width: 300px;
            height: 100%;
            background-color: #fff;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
            padding: 20px;
        }
        .cart-content.open {
            transform: translateX(0);
        }
        .cart-close {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }
        .cart-item {
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .cart-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .cart-item-title {
            font-weight: bold;
        }
    </style>
 
    <link rel="stylesheet" href="../assets/css/demo.css" />
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="../index.html" class="logo">
                        <img src="../assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                    </a>
                    <button class="navbar-toggler sidenav-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="gg-menu-right"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more">
                        <i class="icon-options-vertical"></i>
                    </button>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                    </div>
                </div>
         
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('ventas.index') }}">Ventas</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('provedors.index') }}">Proveedores</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('entradas.create') }}">Entradas</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('tickets.create') }}">Tickets</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('telefonos.create') }}">Teléfonos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('venta_mayoreo.create') }}">Ventas Mayoreo</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
        <div class="main-panel">
            <main class="main-content">
                <div class="container-fluid">
                  
                    <div class="cart" id="cart">
                        <a href="#" id="cart-toggle">
                            <i class="fas fa-shopping-cart"></i>
                            <span id="cart-count">0</span>
                        </a>
                    </div>

                   
                    <div class="cart-content" id="cart-content">
                        <div class="cart-close" id="cart-close">
                            <i class="fas fa-times"></i>
                        </div>
                        <h3>Carrito de Compras</h3>
                        <div id="cart-items">
                           
                        </div>
                    </div>

                  
                    <div class="jumbotron" style="background-image: url('{{ asset('img/descarga (3)') }}');">
                        <h1 class="display-4">Bienvenido a tienda "El changarro"</h1>
                        <p class="lead">Lo mejor en bebidas y alimentos.</p>
                        <hr class="my-4">
                        <p>Somos una empresa dedicada a la venta de productos abarroteros con la mejor calidad.</p>
                        <a class="btn btn-primary btn-lg" href="{{ url('/register') }}" role="button">Regístrate Ahora</a>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Sobre Nosotros</h2>
                            <p>Somos una empresa dedicada a la venta de productos abarroteros con la mejor calidad.</p>
                        </div>
                        <div class="col-lg-4">
                            <h2>Servicios</h2>
                            <ul>
                                <li>Servicio de calidad en nuestros productos.</li>
                                <li>Servicio de calidad hacia nuestros clientes.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h2>Quejas y Sugerencias</h2>
                            <blockquote>
                                <p>"Es una empresa muy dedicada a su trabajo con los mejores productos"</p>
                                <cite>Cliente Satisfecho</cite>
                            </blockquote>
                        </div>
                    </div>

                
                    <h2>Productos</h2>
                    <div class="row">
                        @forelse($productos as $producto)
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    @if ($producto->imagen)
                                        <img src="{{ asset('storage/' . str_replace('public/', '', $producto->imagen)) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                                    @else
                                        <img src="{{ asset('storage/default.jpg') }}" class="card-img-top" alt="Imagen por defecto">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                                        <p class="card-text">{{ $producto->descripcion }}</p>
                                        <p class="card-text"><strong>Precio:</strong> ${{ $producto->precio }}</p>
                                        <button class="btn btn-primary add-to-cart" data-id="{{ $producto->id }}">Añadir al carrito</button>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No hay productos disponibles.</p>
                        @endforelse
                    </div>

                    <h2>Contacto</h2>
                    <form action="{{ url('/contact') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div
            
        </div>
      
    </div>


    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

   
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

   
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

  
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <script src="../assets/js/plugin/gmaps/gmaps.js"></script>

  
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <script src="../assets/js/kaiadmin.min.js"></script>

    <script src="../assets/js/setting-demo2.js"></script>

    <script>
        $(document).ready(function() {
          
            $('#cart-toggle').on('click', function(e) {
                e.preventDefault();
                $('#cart-content').toggleClass('open');
            });

          
            $('#cart-close').on('click', function() {
                $('#cart-content').removeClass('open');
            });

      
            $('.add-to-cart').on('click', function() {
                let productId = $(this).data('id');
                let productName = $(this).closest('.card-body').find('.card-title').text();
                let productPrice = $(this).closest('.card-body').find('.card-text strong').text().replace('Precio: $', '');
                let cartCount = $('#cart-count').text();
                $('#cart-count').text(parseInt(cartCount) + 1);

                let cartItem = `
                    <div class="cart-item">
                        <p class="cart-item-title">${productName}</p>
                        <p class="cart-item-price">$${productPrice}</p>
                    </div>
                `;
                $('#cart-items').append(cartItem);
            });
        });
    </script>
</body>
</html>


