<?php

namespace Model;

class ActiveRecord {
    //base de datos
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';

    //errores/validacion
    protected static $errores = [];

    //definir la conexión a la BD
    public static function setDB($database) {
        self::$db = $database;
    }

    

    //esta funcion se encarga de insertar o actualizar en la BD (personalmente no me gusta esta solucion)
    /* public function save(){
        if(!is_null($this->id)){
            //actualizar el registro
            $this->update();
        }else{
            //crear un nuevo registro
            $this->create();
        }
    } */

    public function create() {
        //sanitizar los datos
        $atributos = $this->sanitizarDatos();

        //INSERTAR EN LA BASE DE DATOS
        $query = "INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " )  VALUES('";
        $query .= join("', '", array_values($atributos));
        $query .= "') ";

        $resultado = self::$db->query($query);
        if ($resultado) {
            //redireccionar al usuario
            header('Location: /admin?resultado=1');
        } else {
            echo "Ocurrió un error al guardar";
        }
    }

    public function update() {
        //sanitizar los datos
        $atributos = $this->sanitizarDatos();

        $valores = [];
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1";
        $resultado = self::$db->query($query);
        if ($resultado) {
            //redireccionar al usuario
            header('Location: /admin?resultado=2');
        } else {
            echo "Ocurrió un error al actualizar";
        }
    }

    //Eliminar el registro
    public function delete() {
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$db->query($query);
        if ($resultado) {
            $this->deleteImage();
            header('Location: /admin?resultado=3');
        }
    }

    public function atributos() {
        $atributos = [];
        foreach (static::$columnasDB as $columna) {
            if ($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarDatos() {
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    //validacion
    public static function getErrores() {
        return static::$errores;
    }
    public function validar() {
        static::$errores = [];
        return static::$errores;
    }

    public function setImagen($imagen) {
        //eliminar la imagen previa
        if (!is_null($this->id)) {
            $this->deleteImage();
        }
        //asignar al atributo de imagen el nombre de la imagen
        if ($imagen) {
            $this->imagen = $imagen;
        }
    }

    //eliminar archivo
    public function deleteImage() {
        //comprobar si existe el archivo
        $fileExists = file_exists(IMAGES_FOLDER . $this->imagen);
        if ($fileExists) {
            unlink(IMAGES_FOLDER . $this->imagen);
        }
    }

    //listar todos los registros
    public static function all() {
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    //obtener un determinado numero de registros
    public static function get($cantidad) {
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $cantidad;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    //buscar registro por ID
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = $id";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado); //retorna la primera posición del array con el objeto
    }

    public static function consultarSQL($query) {
        //consultar la base de datos
        $resultado = self::$db->query($query);
        //iterar los resultados
        $array = [];
        while ($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }
        //liberar la memoria
        $resultado->free();
        //retornar los resultados
        return $array;
    }

    protected static function crearObjeto($registro) {
        $objeto = new static;
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    //Sincroniza el objeto en memoria con los cambios realizados por el usuario
    public function sincronizar($args = []) {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }
}
