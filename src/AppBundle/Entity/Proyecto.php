<?php

namespace AppBundle\Entity;

/**
 * Proyecto
 */
class Proyecto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $ubicacion;

    /**
     * @var string
     */
    private $planoUbicacion;

    /**
     * @var boolean
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var string
     */
    private $presupuestoInicial;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var \DateTime
     */
    private $prorroga1;

    /**
     * @var \DateTime
     */
    private $prorroga2;

    /**
     * @var \DateTime
     */
    private $prorroga3;

    /**
     * @var \AppBundle\Entity\Cliente
     */
    private $cliente;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;

    /**
     * @var \AppBundle\Entity\FrecuenciaInforme
     */
    private $frecuenciaInforme;

    public function __toString(){
        return $this->nombre;
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Proyecto
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set planoUbicacion
     *
     * @param string $planoUbicacion
     *
     * @return Proyecto
     */
    public function setPlanoUbicacion($planoUbicacion)
    {
        $this->planoUbicacion = $planoUbicacion;

        return $this;
    }

    /**
     * Get planoUbicacion
     *
     * @return string
     */
    public function getPlanoUbicacion()
    {
        return $this->planoUbicacion;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Proyecto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Proyecto
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set presupuestoInicial
     *
     * @param string $presupuestoInicial
     *
     * @return Proyecto
     */
    public function setPresupuestoInicial($presupuestoInicial)
    {
        $this->presupuestoInicial = $presupuestoInicial;

        return $this;
    }

    /**
     * Get presupuestoInicial
     *
     * @return string
     */
    public function getPresupuestoInicial()
    {
        return $this->presupuestoInicial;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Proyecto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Proyecto
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set prorroga1
     *
     * @param \DateTime $prorroga1
     *
     * @return Proyecto
     */
    public function setProrroga1($prorroga1)
    {
        $this->prorroga1 = $prorroga1;

        return $this;
    }

    /**
     * Get prorroga1
     *
     * @return \DateTime
     */
    public function getProrroga1()
    {
        return $this->prorroga1;
    }

    /**
     * Set prorroga2
     *
     * @param \DateTime $prorroga2
     *
     * @return Proyecto
     */
    public function setProrroga2($prorroga2)
    {
        $this->prorroga2 = $prorroga2;

        return $this;
    }

    /**
     * Get prorroga2
     *
     * @return \DateTime
     */
    public function getProrroga2()
    {
        return $this->prorroga2;
    }

    /**
     * Set prorroga3
     *
     * @param \DateTime $prorroga3
     *
     * @return Proyecto
     */
    public function setProrroga3($prorroga3)
    {
        $this->prorroga3 = $prorroga3;

        return $this;
    }

    /**
     * Get prorroga3
     *
     * @return \DateTime
     */
    public function getProrroga3()
    {
        return $this->prorroga3;
    }

    /**
     * Set cliente
     *
     * @param \AppBundle\Entity\Cliente $cliente
     *
     * @return Proyecto
     */
    public function setCliente(\AppBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Proyecto
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set frecuenciaInforme
     *
     * @param \AppBundle\Entity\FrecuenciaInforme $frecuenciaInforme
     *
     * @return Proyecto
     */
    public function setFrecuenciaInforme(\AppBundle\Entity\FrecuenciaInforme $frecuenciaInforme = null)
    {
        $this->frecuenciaInforme = $frecuenciaInforme;

        return $this;
    }

    /**
     * Get frecuenciaInforme
     *
     * @return \AppBundle\Entity\FrecuenciaInforme
     */
    public function getFrecuenciaInforme()
    {
        return $this->frecuenciaInforme;
    }
}

