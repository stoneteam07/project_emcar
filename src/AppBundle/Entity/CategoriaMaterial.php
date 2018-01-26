<?php

namespace AppBundle\Entity;

/**
 * CategoriaMaterial
 */
class CategoriaMaterial
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreCategoria;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var string
     */
    private $subCategoria;

    /**
     * @var boolean
     */
    private $estado;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;


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
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     *
     * @return CategoriaMaterial
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return CategoriaMaterial
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return CategoriaMaterial
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
     * Set subCategoria
     *
     * @param string $subCategoria
     *
     * @return CategoriaMaterial
     */
    public function setSubCategoria($subCategoria)
    {
        $this->subCategoria = $subCategoria;

        return $this;
    }

    /**
     * Get subCategoria
     *
     * @return string
     */
    public function getSubCategoria()
    {
        return $this->subCategoria;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return CategoriaMaterial
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
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return CategoriaMaterial
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
}

