<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $entrada->titulo; ?></h1>
    <picture>
        <source srcset="/build/img/destacada2.avif" type="image/avif">
        <source srcset="/build/img/destacada2.webp" type="image/webp">
        <img loading="lazy" src="/build/img/destacada2.jpg" alt="imagen de la propiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span><?php echo $entrada->fecha; ?></span> </p>

    <div class="resumen-propiedad">
        <p><?php echo $entrada->contenido; ?></p>
    </div>
</main>