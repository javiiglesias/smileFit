<?php
require_once("controller/function_AutoLoad.php");
class usuario
{
    private $id;
    private $UserName;
    private $Password;
    private $Descripcion;
    public function __construct()
    {
        switch (func_num_args()) {
            case 3:
                $this->setId(null);
                $this->setUserName(func_get_arg(0));
                $this->setPassword(func_get_arg(1));
                $this->setDescripcion(func_get_arg(2));
                break;
            case 4:
                $this->setId(func_get_arg(0));
                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                $this->setDescripcion(func_get_arg(3));
                break;
        }
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * @param mixed $UserName
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }
    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }
    /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }
    public function validateUser($name, $pass) {
        $usuarioDB = new usuariodb;
        $usuario= $usuarioDB->consultarUsuarioDB($name);

        $a = 1;
        $b=2;
        if ($usuario->getPassword() == $pass){
            return true;
        }else{

        //$usuario= $usuarioDB->consultarUsuariosdb($name, $pass);
        //$ok = false;

        //if($usuario!=null){
        //    $ok = true;
        //}else{
            header("location:index.php?ctl=usuario&act=login");
        }
//        foreach ($arrayUsuaris as $usuari) {
//
//            if($usuari->getUserName() == $name && $usuari->getPassword() == $pass){
//                $ok = true;
//            }
//        }
    }
    public function getUser($name){
        $usuarioDB = new usuariodb;
        $user = $usuarioDB->consultarUsuarioDB($name);
        return $user->getDescripcion();
    }
    public function getRol($name,$pass){
        $rol="";
        $usuario->getUser($name,$pass);
        return $rol[3];
    }

    function registrarUsuario($name, $pass) {
        $usuario = new usuariodb;
        $arrayUsuarios= $usuario->consultarUsuariosdb($name);
        $ok = false;
        $numero_registro=$arrayUsuarios->rowCount();
        if($numero_registro==0){
            $ok = true;
            $arrayUsuarios= $usuario->insertarUsuariosdb($name, $pass);
        }else{
            header("location:index.php?ctl=usuario&act=registro");

//            $ok = false;

        }
        return $ok;
//        $this->llista[] = new Usuari($nom, $pas);
    }
}
?>