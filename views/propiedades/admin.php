<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>

    <?php if ($resultado): ?>
        <?php $mensaje = mostrarNotificacion(intval($resultado)); ?>
        <?php if ($mensaje): ?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>
        <?php endif; ?>
        <?php header('Refresh: 3; url=/admin'); ?>
    <?php endif; ?>

    <div class="separacion-gap">
        <a href="/propiedades/create" class="boton-verde">Nueva Propiedad</a>
        <a href="/vendedores/create" class="boton-amarillo">Nuevo Vendedor/a</a>
        <a href="/blog/create" class="boton-celeste">Nueva Entrada de Blog</a>
        <a href="/escritores/create" class="boton-azul">Nuevo Escritor/a</a>
    </div>

    <h2>Propiedades</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($propiedades as $propiedad): ?>
                <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td><?php echo $propiedad->titulo; ?></td>
                    <td><img src="<?php echo '../images/' . $propiedad->imagen; ?>" class="imagen-tabla" alt="imagen propiedad"></td>
                    <td>$<?php echo $propiedad->precio; ?></td>
                    <td class="acciones">
                        <a href="/propiedades/update?id=<?php echo $propiedad->id; ?>" class="boton-amarillo">Actualizar</a>
                        <form method="POST" action="/propiedades/delete">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                            <input type="hidden" name="tipo" value="propiedad">
                            <a class="boton-rojo">
                                <input type="submit" value="Eliminar">
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Vendedores</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($vendedores as $propiedad): ?>
                <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td><?php echo $propiedad->nombre; ?></td>
                    <td><?php echo $propiedad->apellido; ?></td>
                    <td>+591 <?php echo $propiedad->telefono; ?></td>
                    <td class="acciones">
                        <a href="/vendedores/update?id=<?php echo $propiedad->id; ?>" class="boton-amarillo">Actualizar</a>
                        <form method="POST" action="/vendedores/delete">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <a class="boton-rojo">
                                <input type="submit" value="Eliminar">
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Publicaciones del Blog</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha de Publicación</th>
                <th>Descripcion Corta</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($entradasBlog as $entrada): ?>
                <tr>
                    <td><?php echo $entrada->id; ?></td>
                    <td><?php echo $entrada->titulo; ?></td>
                    <td><?php echo $entrada->fecha; ?></td>
                    <td><?php echo $entrada->descripcion; ?></td>
                    <td class="acciones">
                        <a href="/blog/update?id=<?php echo $entrada->id; ?>" class="boton-amarillo">Actualizar</a>
                        <form method="POST" action="/blog/delete">
                            <input type="hidden" name="id" value="<?php echo $entrada->id; ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <a class="boton-rojo">
                                <input type="submit" value="Eliminar">
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Escritores</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($escritores as $escritor): ?>
                <tr>
                    <td><?php echo $escritor->id; ?></td>
                    <td><?php echo $escritor->nombre; ?></td>
                    <td><?php echo $escritor->apellido; ?></td>
                    <td>+591 <?php echo $escritor->telefono; ?></td>
                    <td class="acciones">
                        <a href="/escritores/update?id=<?php echo $escritor->id; ?>" class="boton-amarillo">Actualizar</a>
                        <form method="POST" action="/escritores/delete">
                            <input type="hidden" name="id" value="<?php echo $escritor->id; ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <a class="boton-rojo">
                                <input type="submit" value="Eliminar">
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>