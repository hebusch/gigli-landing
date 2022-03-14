<?php include_once 'layout/header.html'; ?>
<body>
    <!-- Navbar  -->
    <div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-none">
        <div class="container">
            <div class="proyect-title">
                <a class="navbar-brand" href="#"><span class="first-name">SKIP</span><span class="second-name">EAT</span></a>
            </div>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#chatbot" class="nav-link text-white"><span>CHAT BOTS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#us"><span>NOSOTROS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contacto"><span>CONTACTO</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    <!-- Banner Image -->
    <div class="banner-image w-100 vh-100">
        <div class="encabezado">
            <h1 class="title text-center text-white p-cabezado">
                Todo lo que necesitas para disfrutar, en un solo lúgar.
            </h1>
            <br>
            <button type="button" class="btn-chatbot" data-bs-toggle="modal" data-bs-target="#formModal">
                <span>Solicitar Reserva </span>
            </button>
        </div>
        <div class="scroll-down">
            <a href="#info"><span></span>Ver más</a>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formModal" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Solicitar Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="sendmail" id="formMail" class="form needs-validation" action="/" method="POST" novalidate>
            <div class="modal-body">                
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="mail">
                    </div>
                    <div class="mb-3">
                        <label for="msg" class="form-label">Solicitud</label>
                        <textarea name="msg" id="msg" cols="30" rows="3" class="form-control"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-green">Enviar Solicitud</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Characteristics -->
    <section id="info" class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-person m-auto green-color"></i></div>
                        <h3>Cliente Final</h3>
                        <p class="lead mb-0">
                            Ofrecemos un servicio amigable y personalizado de cara al consumidor final.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-shop m-auto green-color"></i></div>
                        <h3>Restobar</h3>
                        <p class="lead mb-0">Personalizamos la entrega de la información de consumo de sus clientes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-building m-auto green-color"></i></div>
                        <h3>Empresa Relacionada</h3>
                        <p class="lead mb-0">Analizamos y gestionamos la data, entregándole valor de los diferentes hábitos de consumo que presentan los consumidores.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RestoBar Showcase -->
    <section class="showcase" id="chatbot">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img reveal-right" style="background-image: url('assets/img/baralonso.jpeg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text reveal-left">
                    <h2>Bar Alonso</h2>
                    <p class="lead mb-0">
                    Disfruta de exquisitos piqueos, tapas y carnes, junto al mejor ambiente y terraza de Santiago.
                    <br><br>
                    <i class="bi bi-geo-alt orange-color"></i><i> Alonso de Córdoba 4236, Vitacura</i>
                    </p>
                    <div class="btn-chatbot-showcase">
                        <a href="https://chats.landbot.io/v3/H-1020270-MBNRB729TZ0NZ8B7/index.html" class="btn-chatbot">
                            <span>Ir al CHATBOT </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img reveal-left" style="background-image: url('assets/img/tinosbar.png')"></div>
                <div class="col-lg-6 my-auto showcase-text reveal-right">
                    <h2>Tinos Bar</h2>
                    <p class="lead mb-0">
                        El mejor y más completo bar del barrio bellavista.
                        <br><br>
                        <i class="bi bi-geo-alt orange-color"></i><i> Pío Nono 108, Recoleta</i>
                    </p>
                    <div class="btn-chatbot-showcase">
                        <a href="https://chats.landbot.io/v3/H-1037986-35ABGUDD219CW6SZ/index.html" class="btn-chatbot">
                            <span>Ir al CHATBOT </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img reveal-right" style="background-image: url('assets/img/palaciochorrillana.jpeg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text reveal-left">
                    <h2>Palacio de la Chorrillana</h2>
                    <p class="lead mb-0">
                        Tradicion Chilena, las mejores chorrillanas, entre ellas vegetarianas, del mar y con carne mechada.
                        <br><br>
                        <i class="bi bi-geo-alt orange-color"></i><i> Pío Nono 201, Providencia</i>
                    </p>
                    <div class="btn-chatbot-showcase">
                        <a href="https://chats.landbot.io/v3/H-1160436-V5GG8DDQ5PSPLIZO/index.html" class="btn-chatbot">
                            <span>Ir al CHATBOT </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- We -->
    <section class="testimonials text-center bg-light" id="us">
        <div class="container">
            <h2 class="mb-5 reveal">Nosotros</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 reveal-left">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/jiescobedo.jpeg" alt="..." />
                        <h5>José Ignacio Escobedo</h5>
                        <p class="font-weight-light mb-0">
                            Marketing, RRSS e Innovación
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 reveal">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/sgigli.jpeg" alt="..." />
                        <h5>Sebastián Gigli Browne</h5>
                        <p class="font-weight-light mb-0">
                            Ventas, Proveedores y Servicio al Cliente
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 reveal-right">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/mchomali.jpeg" alt="..." />
                        <h5>Matías Chomalí</h5>
                        <p class="font-weight-light mb-0">
                            Administración y Finanzas
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacto -->
    <footer class="footer bg-dark" id="contacto">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 text-center">
                    <p class="text-white"><b>Información de Contacto</b></p>
                    <div class="contact-div">
                        <div class="row">
                            <div class="col-2">
                                <div class="contact-item">
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="contact-item">
                                    <a href="tel:+56998272388">+56998272388</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="contact-item">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="contact-item">
                                    <a href="mailto:contacto@skipeat.cl">contacto@skipeat.cl</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <p class="text-white"><b>Nuestras Redes Sociales</b></p>
                    <ul class="list-inline mb-0 contact-rrss">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/skipeatcl/"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-muted small">&copy; SKIP EAT <span id="current-year"></span>. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/validation.js"></script>
</body>
</html>
