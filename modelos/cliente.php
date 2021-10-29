<?php

class Cliente{

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $correo;
    public function __construct($id,$nombre,$apellido,$telefono,$correo) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;
        $this->correo=$correo;

    }

    public static function consultar(){
        $listaClientes=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM clientes");

        foreach($sql->fetchAll() as $cliente){
            $listaClientes[]= new Cliente($cliente['id'],$cliente['nombre'],$cliente['apellido'],$cliente['telefono'],$cliente['correo']);
        }
        return $listaClientes;

    }


    public static function crear($nombre, $apellido, $telefono, $correo){
        
        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO clientes(nombre, apellido, telefono, correo) VALUES(?,?,?,?)");
        $sql->execute(array($nombre, $apellido, $telefono, $correo));

    }

    public static function borrar($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("DELETE FROM clientes WHERE id=? ");
        $sql->execute(array($id));
    }
    
    public static function buscar($id){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("SELECT * FROM clientes WHERE id=? ");
        $sql->execute(array($id));
        $cliente=$sql->fetch();
        return new Cliente($cliente['id'],$cliente['nombre'],$cliente['apellido'],$cliente['telefono'],$cliente['correo']);
    }
     
    public static function editar($id,$nombre,$apellido,$telefono,$correo){

        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("UPDATE clientes SET nombre=?, apellido=?, telefono=?, correo=? WHERE id=? ");
        $sql->execute(array($nombre, $apellido, $telefono, $correo, $id));

    }


} 

?>