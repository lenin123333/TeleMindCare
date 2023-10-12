<?php include('../layouts/nav.php')  ?>
<?php
    session_start();
    if (!empty($_SESSION['usuario'])) {
        header('Location: ../views/evaluacion.php');
    }
    
?>
        <main id="principal">

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" class="formulario__login" id="form-ini">
                        <h2>Iniciar Sesión</h2>
                        <input type="email" placeholder="Correo Electronico">
                        <input type="password" placeholder="Contraseña">
                        <input type="submit" value="Iniciar Sesión">
                    </form>

                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Apellido">
                        <input type="number" placeholder="Numero Telefono">
                        <input type="email" placeholder="Correo Electronico">
                        <input type="password" placeholder="Contraseña">
                        <input type="submit" value="Registrar">
                    </form>
                </div>
            </div>

        </main>

        
<?php include('../layouts/footer.php')  ?>