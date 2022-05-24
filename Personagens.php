<?php

class Personagens
{

    private int $id;
    private int $forca;
    private int $inteligencia;
    


    public function __construct()
    {
        echo "Personagem criado!";
    }

    /*
    public function __construct($força, $inteligencia)
    {
        
    }
    */

    public function getId()
    {
        return $this->id;
    }

    public function getForca()
    {
        return $this->forca;
    }

    public function getInteligencia()
    {
        return $this-> inteligencia;
    }


    public function setId($id)
    {
        $this-> id = $id;
    }

    public function setInteligencia($inteligencia)
    {
        $this-> inteligencia = $inteligencia;
    }

    public function setForca($forca)
    {
        $this->forca = $forca;
    }


    public function socar() : void
    {
        echo "Te socando!";
    }

    


}