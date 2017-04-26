<?php

require_once("controller/function_AutoLoad.php");

class Usuari
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
        $usuari = new Usuaridb;
        $arrayUsuaris= $usuari->consultarUsuarisdb();
        $ok = false;

        foreach ($arrayUsuaris as $usuari) {

            if($usuari->getUserName() == $name && $usuari->getPassword() == $pass){
                $ok = true;
            }
        }
        return $ok;
    }



}


?>