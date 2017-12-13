<?php

namespace AppBundle\Entity;

/**
 * Participante
 */
class Participante
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Proyecto
     */
    private $proyecto;

    /**
     * @var \AppBundle\Entity\Empleado
     */
    private $empleado;

    /**
     * @var \AppBundle\Entity\Cargo
     */
    private $cargo;


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
     * Set proyecto
     *
     * @param \AppBundle\Entity\Proyecto $proyecto
     *
     * @return Participante
     */
    public function setProyecto(\AppBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \AppBundle\Entity\Proyecto
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    /**
     * Set empleado
     *
     * @param \AppBundle\Entity\Empleado $empleado
     *
     * @return Participante
     */
    public function setEmpleado(\AppBundle\Entity\Empleado $empleado = null)
    {
        $this->empleado = $empleado;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return \AppBundle\Entity\Empleado
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set cargo
     *
     * @param \AppBundle\Entity\Cargo $cargo
     *
     * @return Participante
     */
    public function setCargo(\AppBundle\Entity\Cargo $cargo = null)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return \AppBundle\Entity\Cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }
}

