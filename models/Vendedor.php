<?php

namespace Model;

class Vendedor extends ActiveRecord {
    //base de datos
    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];

    //atributos
    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    //constructor
    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    //validacion de los datos
    public function validar() {
        if(!$this->nombre){
            self::$errores[] = 'El nombre es obligatorio';
        }
        if(!$this->apellido){
            self::$errores[] = 'El apellido es obligatorio';
        }
        if(!$this->telefono){
            self::$errores[] = 'El telefono es obligatorio';
        }

        if(!preg_match('/^[0-9]{8}$/', $this->telefono)){
            self::$errores[] = 'El telefono no es valido';
        }

        return self::$errores;
    }
}
