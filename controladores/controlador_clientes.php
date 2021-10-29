<?php
include_once("modelos/cliente.php");
include_once("conexion.php");

BD::crearInstancia();




class ControladorClientes{
    
    public function inicio(){

        $clientes=Cliente::consultar();

        include_once("vistas/clientes/inicio.php");

    }
    public function crear(){
        if($_POST){
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $telefono=$_POST['telefono'];
            $correo=$_POST['correo'];
            Cliente::crear($nombre,$apellido,$telefono,$correo);
            header("Location:./?controlador=clientes&accion=inicio");
        }
        include_once("vistas/clientes/crear.php");

    }
    public function editar(){
        
        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $telefono=$_POST['telefono'];
            $correo=$_POST['correo'];
            
            Cliente::editar($id,$nombre,$apellido,$telefono,$correo);
            
            header("Location:./?controlador=clientes&accion=inicio");
        }
        
        $id=$_GET['id'];

        $cliente=(Cliente::buscar($id) );
        
        include_once("vistas/clientes/editar.php");

    }

    public function borrar(){
        print_r($_GET);

        $id=$_GET['id'];

        Cliente::borrar($id);
        header("Location:./?controlador=clientes&accion=inicio");
    }
}
?>

