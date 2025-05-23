<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>
    <?php foreach ($entradasBlog as $entrada): ?>
            <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog1.avif" type="image/avif">
                    <source srcset="/build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/blog1.jpg" alt="imagen blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="/entrada?id=<?php echo $entrada->id; ?>">
                    <h4><?php echo $entrada->titulo; ?></h4>
                    <p class="informacion-meta">Escrito el: <span><?php echo $entrada->fecha; ?></span> </p>
                    <p><?php echo $entrada->descripcion; ?></p>
                </a>
            </div>
        </article> <!-- entrada-blog -->
        <?php endforeach; ?>
</main>