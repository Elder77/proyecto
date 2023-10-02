<?php namespace Controllers;

    use Models\Profesor as Profesor;
   

    class profesoresController{
        
        private $profesor;
        
        public function __construct()
        {
            $this->profesor = new Profesor ();
           
        }
        public function index(){
            $datos = $this->profesor->listar();
            return $datos;
        }
        public function agregar(){
        
            if($_POST){
        
                $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
                $limite = 700;
                if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
                    $nombre = date('is') . $_FILES['imagen']['name'];
                    $ruta = "Views" . DS . "template". DS . "imagenes" . DS . "avatars" . DS . $nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    $this->profesor->set("nombre", $_POST['nombre']);
                    $this->profesor->set("edad", $_POST['edad']);
                    $this->profesor->set("imagen", $nombre);
                    $this->profesor->set("materia", $_POST['materia']);
                    $this->profesor->add();
                    header("Location: " . URL . "profesores");
                }
            }
        }

        public function editar($id){
			if(!$_POST){
				$this->profesor->set("id", $id);
				$datos = $this->profesor->view();
				return $datos;
			}else{
				$this->profesor->set("id", $_POST['id']);
				$this->profesor->set("nombre", $_POST['nombre']);
				$this->profesor->set("edad", $_POST['edad']);
				$this->profesor->set("materia", $_POST['materia']);
				$this->profesor->edit();
				header("Location: " . URL . "profesores");
			}
		}

		public function ver($id){
			$this->profesor->set("id",$id);
			$datos = $this->profesor->view();
			return $datos;
		}

		public function eliminar($id){
			$this->profesor->set("id",$id);
			$this->profesor->delete();
			header("Location: " . URL . "profesores");
		}
}
	$profesores = new profesoresController();

?>
    
