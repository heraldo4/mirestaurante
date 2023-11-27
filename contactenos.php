<?php include "header.php" ?>

<!-- Mapa -->
<iframe class="justify-content-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31439.843319661682!2d-84.1339875390225!3d9.935587290166964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e342c50d15c5%3A0xe6746a6a9f11b882!2sSan%20Jos%C3%A9%20Province%2C%20San%20Jos%C3%A9!5e0!3m2!1sen!2scr!4v1701026982667!5m2!1sen!2scr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<main class="container">
    <section class="mb-4">
        <!--Section heading-->
        <div class="contact form-title" style="background-image: url('img/Contactenos/Vegetales.jpeg" );>
            <h4 class="text-center my-4">Contactenos</h4>
        </div>
        <!--Section description-->
        <section class="row">
            <!-- Formulario -->
            <form class="col-lg-6" action="">
                <div class="form-floating mb-3">
                    <input type="text" class="contact form-control" name="nombre" id="nombre" placeholder="Digite su Nombre">
                    <label for="nombre">Nombre</label>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="form-floating mb-3" for="email"></label>
                        <input type="email" class="contact form-control" name="email" id="email" placeholder="Correo electrónico">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-floating mb-3" for="telefono"></label>
                        <input type="phone" class="contact form-control" name="telefono" id="telefono" placeholder="Telefono">
                    </div>
                </div>

                <div class="mb-3 mensaje">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="contact form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" class="btn btn-success" value="Enviar">
                </div>
            </form>

            <div class="col-md-6 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <h3>Información</h3>
                        <p>¿Tienes alguna pregunta o inquietud? ¡Estamos aquí para ayudarte! No dudes en contactarnos directamente. Nuestro equipo estará encantado de responder a tus consultas y brindarte la asistencia que necesitas. Completa el formulario a continuación o utiliza la información de contacto proporcionada. Nos comprometemos a responderte en cuestión de horas.</p>
                    </li>
                    <li>
                        <i class="locacion fa-solid fa-location-dot fa-xl"></i>
                        <p>San José, 10801, CR</p>
                    </li>
                    <li>
                        <i class="telefono fa-solid fa-phone fa-xl"></i>
                        <p>+506 2256 7832</p>
                    </li>
                    <li>
                        <i class="correo fa-solid fa-envelope fa-xl"></i>
                        <p>info@greenbite.com</p>
                    </li>
                </ul>
            </div>
        </section>
    </section>
</main>

<?php include "footer.php" ?>