<main class="contenedor seccion">
    <h1>Registrar una Nueva Entrada de Blog</h1>

    <a href="/admin" class="boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST">

        <?php include __DIR__ . '/formulario.php'; ?>

        <input type="submit" class="boton-verde" value="Registrar Entrada de Blog">
    </form>
</main>