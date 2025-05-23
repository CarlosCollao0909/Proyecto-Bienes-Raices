<?php

namespace Model;

class EntradaBlog extends ActiveRecord {
    protected static $tabla = 'entradasBlog';
    protected static $columnasDB = ['id', 'titulo', 'fecha', 'descripcion', 'contenido', 'escritorID'];

    public $id;
    public $titulo;
    public $fecha;
    public $descripcion;
    public $contenido;
    public $escritorID;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->contenido = $args['contenido'] ?? '';
        $this->escritorID = $args['escritorID'] ?? '';
    }

    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "El título es obligatorio";
        }
        if (!$this->fecha) {
            self::$errores[] = "La fecha es obligatoria";
        }
        if (!$this->descripcion) {
            self::$errores[] = "La descripción es obligatoria";
        }
        if (!$this->contenido) {
            self::$errores[] = "El contenido es obligatorio";
        }
        if (!$this->escritorID) {
            self::$errores[] = "Debe seleccionar un escritor";
        }
        return self::$errores;
    }
}