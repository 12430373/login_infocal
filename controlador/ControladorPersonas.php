<?php
    // include "persona.php";
    require "../conexion/conexionBase.php"; 
    $per=new Persona();
    
    $nombre=htmlspecialchars($_POST["nombre"]);
    $papellido=htmlspecialchars($_POST["papellido"]);
    $sapellido=htmlspecialchars($_POST["sapellido"]);
    $celular=htmlspecialchars($_POST["celular"]);
    $direccion=htmlspecialchars($_POST["direccion"]);
    $fechanac=htmlspecialchars($_POST["fechanac"]);
    
    
    if (empty($_POST["nombre"])) {
        echo '<script>alert("existen campos vacios");</script>';
        header("Refresh: 0; URL=../signup.php");
    }else{
        $per->asignar("nombre",$nombre);
        $per->asignar("papellido",$papellido);
        $per->asignar("sapellido",$sapellido);
        $per->asignar("celular",$celular);
        $per->asignar("direccion",$direccion);
        $per->asignar("fechanac",$fechanac);
        $per->registrarPersona();
        header("location: ../index.php");
    }
    class Persona{
        private $nombre;
        private $papellido;
        private $sapellido;
        private $celular;
        private $direccion;
        private $fechanac;
        private $con;
    
        function __construct(){
            $this->nombre="";
            $this->papellido="";
            $this->sapellido="";
            $this->celular="";
            $this->direccion="";
            $this->fechanac="";
            $this->con=new conexionBase();
        }
        function asignar($nom,$valor){
            $this->$nom=$valor;
        }
        function registrarPersona(){
            $this->con->CreateConnection();
            // encriptar password
            // $clave=md5($this->pass1);
            $sql="insert into persona(nombre,papellido,sapellido,celular,direccion,fechanac) values('$this->nombre','$this->papellido','$this->sapellido','$this->celular','$this->direccion','$this->fechanac')";
            // echo $sql;
            // die();
            $result = $this->con->ExecuteQuery($sql);
            
            if ($result && $result->num_rows > 0) {
            header("location: ../Usuarios.php");
            } else {
            echo '<script>alert("La persona se pudo registrar correctamente");</script>';
            header("Refresh: 0; URL=../Personas.php"); // Redirigir después de mostrar la alerta
            exit;
            }
        }
    }