<?php
require_once("controller/function_AutoLoad.php");
class noticia
{
    private $id;
    private $titiulo;
    private $imagen;
    private $descripcion;
    private $contenido;
    public function __construct()
    {
       $this->setId(null);
       $this->setTitiulo(null);
       $this->setImagen(null);
       $this->setDescripcion(null);
        $this->setContenido(null);
      
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
        return $this->titiulo;
    }
    /**
     * @param mixed $titulo
     */
    public function setTitiulo($titulo)
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

    public function muestraNoticias() {
        $noticia = new noticiasdb;
        $arrayNoticias= $noticia->mostrarNoticiasdb();
        var_dump($arrayNoticias);//l'array sale vacia, seguido debemos hacer un  array
//        foreach ($arrayUsuaris as $usuari) {
//
//            if($usuari->getUserName() == $name && $usuari->getPassword() == $pass){
//                $ok = true;
//            }
//        }
        return $arrayNoticias;
    }
  /*  function registrarUsuario($name, $pass) {
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
    }*/
}
?>