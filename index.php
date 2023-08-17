<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesor de Tecnología Informática</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Asesor IT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="inicio" class="section">
        <div class="container">
            <div id="bienvenida">
                <h1>Bienvenido a Asesor IT</h1>
                <p>Tu socio confiable en soluciones de redes informáticas.</p>
                <img src="img/security.jpg" alt="Imagen de Bienvenida">
            </div>
        </div>
    </section>

    <section id="servicios" class="section bg-light">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4">
                <a href="servicio1.html" class="service-link">
                    <div class="service">
                        <h3>Planificación de Redes</h3>
                        <p>Diseño y optimización de redes a medida.</p>
                    </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="servicio1.html" class="service-link">
                    <div class="service">
                        <h3>Seguridad de Redes</h3>
                        <p>Protege tus datos y sistemas contra amenazas.</p>
                    </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="servicio1.html" class="service-link">
                    <div class="service">
                        <h3>Consultoría Técnica</h3>
                        <p>Asesoramiento experto para tus proyectos.</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>

    <section id="utilerias" class="section bg-light">
        <div class="container">
            <h2>Utilerias</h2>
            <div class="row">
                <div class="col-md-4">
                <a href="calculadora.html" class="service-link">
                    <div class="service">
                        <h3>Caluladora de redes</h3>
                        <p>Herramienta de subneteo</p>
                    </div>
                </a>
                </div>
               </div>
        </div>
    </section>

    <section id="contacto" class="section">
        <div class="container">
            <h2>Contacto</h2>
            <p>Estamos aquí para ayudarte. ¡Contáctanos!</p>
            <address>
                <p>Email: info@asesorit.com</p>
                <p>Teléfono: 123-456-7890</p>
            </address>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Asesor IT. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
