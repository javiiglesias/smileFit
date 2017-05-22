<?php
require_once("controller/function_AutoLoad.php");
class trabajador{
    private $id;
    private $nombre;
    private $apellidos;
    private $fechaNacimiento;
    private $email;
    private $telefono;
    private $foto;
    private $idUsuario;
    private $idRol;

    public function __construct()
    {

        switch (func_num_args()) {

            case 6:
                $this->setId(null);
                $this->setNombre(func_get_arg(0));
                $this->setApellidos(func_get_arg(1));
                $this->setFechaNacimento(func_get_arg(2));
                $this->setEmail(func_get_arg(3));
                $this->setTelefono(func_get_arg(4));
                $this->setFoto(func_get_arg(5));
                $this->setIdUsuario(null);
                $this->setIdRol(null);
                break;

            case 8:
                $this->setId(func_get_arg(0));
                $this->setNombre(func_get_arg(1));
                $this->setApellidos(func_get_arg(2));
                $this->setFechaNacimento(func_get_arg(3));
                $this->setEmail(func_get_arg(4));
                $this->setTelefono(func_get_arg(5));
                $this->setFoto(func_get_arg(6));
                $this->setIdUsuario(null);
                $this->setIdRol(func_get_arg(7));
                break;

            case 9:
                $this->setId(func_get_arg(0));
                $this->setNombre(func_get_arg(1));
                $this->setApellidos(func_get_arg(2));
                $this->setFechaNacimento(func_get_arg(3));
                $this->setEmail(func_get_arg(4));
                $this->setTelefono(func_get_arg(5));
                $this->setFoto(func_get_arg(6));
                $this->setIdUsuario(func_get_arg(7));
                 $this->setIdRol(func_get_arg(8));
                break;



        }
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getFechaNacimento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }


    public function getFoto()
    {
        return $this->foto;
    }


    public function setFoto($foto)
    {
        $this->foto = $foto;
    }


    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function getIdRol() {
        return $this->idRol;
    }

    function setIdRol($idRol) {
        $this->idRol = $idRol;
    }

        public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }


    public function getTrabajadores(){
        $trabajadorDB = new trabajadordb();
        $trabajadores = $trabajadorDB->getTrabajadoresDb();
        return $trabajadores;
    }    

    public function addWorker($nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto,$rol,$idUser){
        $trabajadorDB = new trabajadordb();
        $trabajador = $trabajadorDB->addWorker($nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto,$rol,$idUser);
 
        return $trabajador;
    }

    public function getTrabajadorPorIdUser($idUser=null){
        $trabajadorDB = new trabajadordb();
        if($idUser==null){
            $arrayTrabajadores= $trabajadorDB->consultarTrabajadorDB();
            return $arrayTrabajadores;
        } else {
            $trabajadorDB = new trabajadordb();
            $trabajador = $trabajadorDB->consultarTrabajadorDB($idUser);
             if(!$trabajador){
 
                return false;
 
            }else{
 
            return $trabajador->getId();
 
            }
 ;
        }
    }
    
    public function getTrabajador($idUser=null){
        $trabajadorDB = new trabajadordb();
        if($idUser==null){
            $arrayTrabajadores= $trabajadorDB->consultarTrabajadorDB();
            return $arrayTrabajadores;
        } else {
            $trabajadorDB = new trabajadordb();
            $trabajador = $trabajadorDB->consultarTrabajadorDB($idUser);
            
            return $trabajador;
        }
    }

    public function getTrabajadorRol($idRol){

        $trabajadorDB = new trabajadordb();
        $trabajador = $trabajadorDB->consultarTrabajadorDB($idRol);
         if(count($trabajador )<1){
 
            return false;
 
        }else{
            return $trabajador->getIdRol();
        }
 
    }

      public function setTrabajador($id,$nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto){
        $trabajadorDB= new trabajadordb();

        $trabajador = $trabajadorDB->setTrabajadorDB($id,$nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto);

        return $trabajador;

      }

    public function getTrabajadorNombreRol($idRol){

        $trabajadorDB = new trabajadordb();
        $rolDescripcion = $trabajadorDB->consultarRol($idRol);
        return $rolDescripcion;

    }

    public function eliminarTrabajador($id){
        $trabajadorDB= new trabajadordb();

        $trabajador = $trabajadorDB->eliminarTrabajadorDB($id);

        return $trabajador;

    }

    public function getNombreApellidos($idTrabajador){

        $trabajadorDB = new trabajadordb();
        $nombreApellidos = $trabajadorDB->getNombreApellidosDb($idTrabajador);
        $nombreApellidosTrabajador=implode($nombreApellidos[0]);
        return $nombreApellidosTrabajador;
<<<<<<< HEAD

    }
    public function getIdTrabajadorPorNombre($nombre){
         $trabajadorDB = new trabajadordb();
        $idTraba = $trabajadorDB->getIdTrabajadorDb($nombre);
        
        return $idTraba;
    }

    public function getTrabajadorPorTablaUsuario($idUser){

        $trabajadorDB= new trabajadordb();

        $trabajador = $trabajadorDB->getTrabajadorPorTablaUsuarioDB($idUser);

        return $trabajador;

    }
=======

    }

    public function getTrabajadorPorTablaUsuario($idUser){

        $trabajadorDB= new trabajadordb();

        $trabajador = $trabajadorDB->getTrabajadorPorTablaUsuarioDB($idUser);

        return $trabajador;

    }
>>>>>>> Marcos


}