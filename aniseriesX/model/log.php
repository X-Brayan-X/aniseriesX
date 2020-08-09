<?php

    class Log extends Conexion{
        
        public function Log() {
            parent::__construct();
            
        }
        public function registrar($nombre_usuario,$password) {
            $sql ="INSERT INTO usuarios(nombre,password)values(:nombre, :password)";
            $statement = $this->base->prepare($sql);
            $statement->execute(array(':nombre'=> $nombre_usuario,':password'=>password));
            $statement->closeCursor();
        }
        public function login($nombre_usuario,$password){

        }
    }
?>