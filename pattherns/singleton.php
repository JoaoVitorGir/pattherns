<?php
    class RegistroUsuario {
        private static $instancia;
        private $usuarios = array();

        private function __construct() {}

        public static function getInstancia() {
            if (null === static::$instancia) {
                static::$instancia = new static();
            }
            return static::$instancia;
        }

        public function registrarUsuario($usuario) {
            array_push($this->usuarios, $usuario);
        }

        public function getUsuarios() {
            return $this->usuarios;
        }

        public function getListaUsuarios() {
            $lista = "<ul>";
            foreach ($this->usuarios as $key => $value) {
                $lista .= "<li> ".$value." </li>";
            }
            $lista .= "</ul>";
            return $lista;
        }
    }
?>
