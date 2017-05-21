<?php
require_once("controller/function_AutoLoad.php");
class evento
{
    private $id;
    private $descripcion;
    private $fechaInicio;
    private $fechaFin;
    private $clase;
    private $url;
    private $clienteId;
    private $trabajadorId;

    public function __construct()
    {

        switch (func_num_args()) {
            case 8:
                $this->setId(func_get_arg(0));
                $this->setDescripcion(func_get_arg(1));
                $this->setFechaInicio(func_get_arg(2));
                $this->setFechaFin(func_get_arg(3));
                $this->setClase(func_get_arg(4));
                $this->setUrl(func_get_arg(5));
                $this->setClienteId(func_get_arg(6));
                $this->setTrabajadorId(func_get_arg(7));
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
     * @param mixed $Descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @return mixed
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    /**
     * @param mixed $fechaInicio
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }
    /**
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }
    /**
     * @param mixed $fechaFin
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }
    /**
     * @return mixed
     */
    public function getClase()
    {
        return $this->clase;
    }
    /**
     * @param mixed $clase
     */
    public function setClase($clase)
    {
        $this->clase = $clase;
    }
    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @return mixed
     */
    public function getClienteId()
    {
        return $this->clienteId;
    }
    /**
     * @param mixed $clienteId
     */
    public function setClienteId($clienteId)
    {
        $this->clienteId = $clienteId;
    }
    /**
     * @return mixed
     */
    public function getTrabajadorId()
    {
        return $this->trabajadorId;
    }
    /**
     * @param mixed $clase
     */
    public function setTrabajadorId($trabajadorId)
    {
        $this->trabajadorId = $trabajadorId;
    }
    /**
     * @return mixed
     */

    // public function getEventosPorTrabajador($idTrabajador){
    //     $evento = new eventosdb;
    //     $eventos= $evento->getEventosPorTrabajadordb($idTrabajador);
    //     return $eventos;
    // }  

    public function getEventos($date){
        $evento = new eventosdb;
        $eventos= $evento->getEvents($date);
        return $eventos;
    }  
}
?>
