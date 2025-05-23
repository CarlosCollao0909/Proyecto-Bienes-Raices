<fieldset>
    <legend>Información General</legend>

    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="entrada[titulo]" placeholder="Título Entrada de Blog" value="<?php echo s($entrada->titulo) ?? ''; ?>">

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="entrada[fecha]" value="<?php echo s($entrada->fecha) ?? ''; ?>">

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="entrada[descripcion]"><?php echo s($entrada->descripcion) ?? ''; ?></textarea>

    <label for="contenido">Contenido:</label>
    <textarea id="contenido" name="entrada[contenido]"><?php echo s($entrada->contenido) ?? ''; ?></textarea>

    <label for="escritorID">Escritor:</label>
    <select name="entrada[escritorID]" id="escritorID">
        <option value=""> -- Seleccione -- </option>
        <?php foreach ($escritores as $escritor): ?>
            <option value="<?php echo s($escritor->id); ?>"> <?php echo s($escritor->nombre . " " . $escritor->apellido) ?? ''; ?> </option>
        <?php endforeach; ?>
    </select>
</fieldset>