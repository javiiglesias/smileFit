<?php

require_once("controller/function_AutoLoad.php");
class FichaMedica
{

    private $id;
    private $idCliente;
    private $IMC;
    private $Peso;
    private $Altura;
    private $Metabolismo;



    public function __construct()
    {

        switch (func_num_args()) {
            case 6:
                $this->setId(func_get_arg(0));
                $this->setIMC(func_get_arg(1));
                $this->setPeso(func_get_arg(2));
                $this->setAltura(func_get_arg(3));
                $this->setMetabolismo(func_get_arg(4));
                $this->setIdCliente(func_get_arg(5));
                break;
            case 5:
                $this->setId(null);
                $this->setIdCliente(func_get_arg(0));
                $this->setIMC(func_get_arg(1));
                $this->setPeso(func_get_arg(2));
                $this->setAltura(func_get_arg(3));
                $this->setMetabolismo(func_get_arg(4));

                break;
//            case 4:
//                $this->setId(func_get_arg(0));
//                $this->setIdCliente(func_get_arg(1));
//                $this->setIMC(func_get_arg(2));
//                $this->setPeso(func_get_arg(3));
//                $this->setAltura(func_get_arg(4));
//                $this->setMetabolismo(func_get_arg(5));
//                break;
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
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getIMC()
    {
        return $this->IMC;
    }

    /**
     * @param mixed $IMC
     */
    public function setIMC($IMC)
    {
        $this->IMC = $IMC;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->Peso;
    }

    /**
     * @param mixed $Peso
     */
    public function setPeso($Peso)
    {
        $this->Peso = $Peso;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->Altura;
    }

    /**
     * @param mixed $Altura
     */
    public function setAltura($Altura)
    {
        $this->Altura = $Altura;
    }

    /**
     * @return mixed
     */
    public function getMetabolismo()
    {
        return $this->Metabolismo;
    }

    /**
     * @param mixed $Metabolismo
     */
    public function setMetabolismo($Metabolismo)
    {
        $this->Metabolismo = $Metabolismo;
    }


    public function getFichaMedica($IdCliente){
        $FichaMedicaDB = new FichaMedicadb();
        $ficha = $FichaMedicaDB->consultarFichaMedicaDB($IdCliente);
        return $ficha;

    }

    public function setFichaMedica($id,$IMC,$Peso,$Altura,$Metabolismo){
        $FichaMedicaDB= new FichaMedicadb();
        $ficha = $FichaMedicaDB->setFichaMedicaDB($id,$IMC,$Peso,$Altura,$Metabolismo);
        return $ficha;
    }


    public function añadirFichaMedica($IMC,$Peso,$Altura,$Metabolismo,$idCliente){
        $FichaMedicaDB= new FichaMedicadb();
        $ficha = $FichaMedicaDB->añadirFichaMedicaDB($IMC,$Peso,$Altura,$Metabolismo,$idCliente);
        return $ficha;
    }




}