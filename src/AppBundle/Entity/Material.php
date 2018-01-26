<?php

namespace AppBundle\Entity;

/**
 * Material
 */
class Material
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreMaterial;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \AppBundle\Entity\CategoriaMaterial
     */
    private $categoriaMaterial;

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
     * Set nombreMaterial
     *
     * @param string $nombreMaterial
     *
     * @return Material
     */
    public function setNombreMaterial($nombreMaterial)
    {
        $this->nombreMaterial = $nombreMaterial;

        return $this;
    }

    /**
     * Get nombreMaterial
     *
     * @return string
     */
    public function getNombreMaterial()
    {
        return $this->nombreMaterial;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Material
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
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Material
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
     * @return Material
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
     * Set categoriaMaterial
     *
     * @param \AppBundle\Entity\CategoriaMaterial $categoriaMaterial
     *
     * @return Material
     */
    public function setCategoriaMaterial(\AppBundle\Entity\CategoriaMaterial $categoriaMaterial = null)
    {
        $this->categoriaMaterial = $categoriaMaterial;

        return $this;
    }

    /**
     * Get categoriaMaterial
     *
     * @return \AppBundle\Entity\CategoriaMaterial
     */
    public function getCategoriaMaterial()
    {
        return $this->categoriaMaterial;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Material
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

