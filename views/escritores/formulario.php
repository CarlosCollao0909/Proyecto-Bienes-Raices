<fieldset>
    <legend>Información del Escritor</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="escritor[nombre]" placeholder="Nombre Escritor/a" value="<?php echo s($escritor->nombre) ?? ''; ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="escritor[apellido]" placeholder="Apellido Escritor/a" value="<?php echo s($escritor->apellido) ?? ''; ?>">

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="escritor[telefono]" placeholder="Teléfono Escritor/a" value="<?php echo s($escritor->telefono) ?? ''; ?>">
</fieldset>