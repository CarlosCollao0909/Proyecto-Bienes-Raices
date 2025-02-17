<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>
    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="POST" class="formulario" action="/login">
        <fieldset>
            <legend>Email y Contraseña</legend>

            <label for="email">E-mail:</label>
            <input type="email" id="email" placeholder="Tu E-mail" name="email">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" placeholder="Tu Contraseña" name="password">
        </fieldset>

        <input type="submit" class="boton-verde" value="Iniciar Sesión">
    </form>
</main>