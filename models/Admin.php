<?php 

namespace Model;

class Admin extends ActiveRecord {
    //DB
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'email', 'password'];
    //atributos
    public $id;
    public $email;
    public $password;
    //constructor
    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
    }
    //validacion de los datos
    public function validar() {
        if (!$this->email) {
            self::$errores[] = "El email es obligatorio o no es valido";
        }
        if (!$this->password) {
            self::$errores[] = "El password es obligatorio";
        }
        return self::$errores;
    }
    //confirmar si el usuario existe
    public function userExists() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "'";
        $resultado = self::$db->query($query);
        if (!$resultado->num_rows) {
            self::$errores[] = "El usuario no existe";
            return;
        }
        return $resultado;
    }
    //verificar si el password es correcto
    public function checkPassword($resultado) {
        $user = $resultado->fetch_object();
        $autenticado = password_verify($this->password, $user->password);
        if (!$autenticado) {
            self::$errores[] = "El password es incorrecto";
        }
        return $autenticado;
    }
    //autenticar al usuario
    public function autenticar() {
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['id'] = $this->id;
        $_SESSION['usuario'] = $this->email;
        header('Location: /admin');
    }
}