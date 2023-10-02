<?php namespace Models;

    class Profesor{
        private $id;
        private $nombre;
        private $edad;
        private $imagen;
        private $materia;
        private $fecha;
        private $con;

        public function __construct()
        {
            $this->con = new Conexion();
        }
        
        public function set($atributo,$contenido){
            $this->$atributo= $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }

        public function listar(){
            $sql = " SELECT * FROM profesores";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        public function add(){
            $sql = "INSERT INTO profesores(id, nombre, edad, imagen, fecha, 
            materia) VALUES (null, '{$this->nombre}', '{$this->edad}', '{$this->imagen}','{$this->materia}', NOW())";
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM profesores WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
        }

        public function edit(){
            $sql = "UPDATE profesores SET nombre = '{$this->nombre}', edad='{$this->edad}',
                    materia= '{$this->materia}'";
            $this->con->consultaSimple($sql);     
        }

  
        public function view(){
            $sql = "SELECT * FROM profesores WHERE id='{$this->id}'";
            $datos = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }
    }
?>