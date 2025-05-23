<fieldset>
    <legend>Información General</legend>

    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Título Propiedad" value="<?php echo s($propiedad->titulo); ?>">

    <label for="precio">Precio</label>
    <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad" value="<?php echo s($propiedad->precio); ?>">

    <label for="imagen">Imagen</label>
    <input type="file" id="imagen" name="propiedad[imagen]" accept="image/jpeg, image/png">

    <?php if ($propiedad->imagen): ?>
        <img src="/images/<?php echo $propiedad->imagen; ?>" class="imagen-small">
    <?php endif; ?>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="propiedad[descripcion]"> <?php echo s($propiedad->descripcion); ?> </textarea>
</fieldset>

<fieldset>
    <legend>Información de la Propiedad</legend>

    <label for="habitaciones">Habitaciones:</label>
    <input type="number" id="habitaciones" name="propiedad[habitaciones]" min="1" max="9" placeholder="Ej. 3" value="<?php echo s($propiedad->habitaciones); ?>">

    <label for="wc">Baños:</label>
    <input type="number" id="wc" name="propiedad[wc]" min="1" max="9" placeholder="Ej. 3" value="<?php echo s($propiedad->wc); ?>">

    <label for="estacionamiento">Estacionamiento:</label>
    <input type="number" id="estacionamiento" name="propiedad[estacionamiento]" min="1" max="9" placeholder="Ej. 3" value="<?php echo s($propiedad->estacionamiento); ?>">
</fieldset>

<fieldset>
    <legend>Vendedor</legend>

    <select name="propiedad[vendedorID]" id="vendedorID">
        <option value=""> -- Seleccione -- </option>
        <?php foreach ($vendedores as $vendedor): ?>
            <option <?php echo $propiedad->vendedorID === $vendedor->id ? 'selected' : ''; ?> value="<?php echo s($vendedor->id); ?>"> <?php echo s($vendedor->nombre . " " . $vendedor->apellido); ?> </option>
        <?php endforeach; ?>
    </select>
</fieldset>