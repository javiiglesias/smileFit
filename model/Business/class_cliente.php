
<?php

require_once("controller/function_AutoLoad.php");

class cliente{

    private $id;
    private $nombre;
    private $apellidos;
    private $edad;
    private $email;
    private $telefono;
    private $foto;
    private $idUsuario;

    public function __construct(){

        switch (func_num_args()) {
            case 6:
                $this->setId(null);
                $this->setNombre(func_get_arg(0));
                $this->setApellidos(func_get_arg(1));
                $this->setEdad(func_get_arg(2));
                $this->setEmail(func_get_arg(3));
                $this->setTelefono(func_get_arg(4));
                $this->setFoto(func_get_arg(5));
                $this->setIdUsuario(null);
                break;
            case 7:
                $this->setId(func_get_arg(0));
                $this->setNombre(func_get_arg(1));
                $this->setApellidos(func_get_arg(2));
                $this->setEdad(func_get_arg(3));
                $this->setEmail(func_get_arg(4));
                $this->setTelefono(func_get_arg(5));
                $this->setFoto(func_get_arg(6));
                $this->setIdUsuario(null);
                break;
            case 8:
                $this->setId(func_get_arg(0));
                $this->setNombre(func_get_arg(1));
                $this->setApellidos(func_get_arg(2));
                $this->setEdad(func_get_arg(3));
                $this->setEmail(func_get_arg(4));
                $this->setTelefono(func_get_arg(5));
                $this->setFoto(func_get_arg(6));
                $this->setIdUsuario(func_get_arg(7));
                break;
        }
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getCliente($cliente){
        $clienteDB = new clientedb();
        $cliente = $clienteDB->consultarClienteDB($cliente);
        return $cliente;

    }

    public function setCliente($id,$nombre,$apellidos,$edad,$email,$telefono,$foto){
        $clienteDB= new clientedb();
        $cliente = $clienteDB->setClienteDB($id,$nombre,$apellidos,$edad,$email,$telefono,$foto);
        return $cliente;
    }

    public function eliminarCliente($id){
        $clienteDB= new clientedb();
        $cliente = $clienteDB->eliminarClienteDB($id);
        return $cliente;
    }
    public function añadirCliente($nombre,$apellidos,$edad,$email,$telefono,$foto, $idUser){
        $clienteDB= new clientedb();
        $cliente = $clienteDB->añadirClienteDB($nombre,$apellidos,$edad,$email,$telefono,$foto, $idUser);
        return $cliente;
    }

    public function getClientePorIdUser($idUser=null){
        $clienteDB = new clientedb();
        if($idUser==null){
            $arrayClientes= $clienteDB->consultarClienteDB();
            return $arrayClientes;
        } else {
            $clienteDB = new clientedb();
            $cliente = $clienteDB->consultarClienteDB($idUser);
            return $cliente->getId();
        }
    }

    public function getCustomers(){
        $clienteDB = new clientedb();
        $cliente = $clienteDB->consultarClientesDB();
        return $cliente;
    }

    // public function getClientes(){
    //     $clienteDB = new clientedb();
    //     $cliente = $clienteDB->getClientesDb();
    //     return $cliente;
    // }

    public function getNombreApellidos($idCliente){

        $clienteDB = new clientedb();
        $nombreApellidos = $clienteDB->getNombreApellidosDb($idCliente);
        return $nombreApellidos;

    }

}
