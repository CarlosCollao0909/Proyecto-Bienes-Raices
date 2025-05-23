<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <?php include 'iconosNosotros.php' ?>
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>

    <?php include 'listadoPropiedades.php'; ?>

    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se contactará contigo para ayudarte</p>
    <a href="/contacto" class="boton boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
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

    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>- Juan Collao</p>
        </div>
    </section>
</div>