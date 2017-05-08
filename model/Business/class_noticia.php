<?php
require_once("controller/function_AutoLoad.php");
class noticia
{
    private $id;
    private $titulo;
    private $imagen;
    private $descripcion;
    private $contenido;
    public function __construct()
    {

        switch (func_num_args()) {
            case 4:
                $this->setId(null);
                $this->setTitulo(func_get_arg(0));
                $this->setImagen(func_get_arg(1));
                $this->setDescripcion(func_get_arg(2));
                $this->setContenido(func_get_arg(3));
                break;
            case 5:
               $this->setId(func_get_arg(0));
                $this->setTitulo(func_get_arg(1));
                $this->setImagen(func_get_arg(2));
                $this->setDescripcion(func_get_arg(3));
                $this->setContenido(func_get_arg(4));
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
    public function getTitulo()
    {
        return $this->titulo;
    }
    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }
    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
        /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @param mixed $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }
       /**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }

 

    public function muestraNoticia($nNoticia=null) {
        $noticia = new noticiasdb;
        $arrayNoticias= $noticia->mostrarNoticiadb($nNoticia);

        return $arrayNoticias;
    }
  
}
?>
