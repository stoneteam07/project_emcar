<?php

namespace AppBundle\Entity;

/**
 * FrecuenciaInforme
 */
class FrecuenciaInforme
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $frecuenciaInforme;

    public function __toString(){
        return $this->frecuenciaInforme;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set frecuenciaInforme
     *
     * @param string $frecuenciaInforme
     *
     * @return FrecuenciaInforme
     */
    public function setFrecuenciaInforme($frecuenciaInforme)
    {
        $this->frecuenciaInforme = $frecuenciaInforme;

        return $this;
    }

    /**
     * Get frecuenciaInforme
     *
     * @return string
     */
    public function getFrecuenciaInforme()
    {
        return $this->frecuenciaInforme;
    }
}

