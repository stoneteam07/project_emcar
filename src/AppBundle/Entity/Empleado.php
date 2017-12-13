<?php

namespace AppBundle\Entity;

/**
 * Empleado
 */
class Empleado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $matriculaCodigo;

    /**
     * @var string
     */
    private $paterno;

    /**
     * @var string
     */
    private $materno;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var integer
     */
    private $usuarioId;

    /**
     * @var boolean
     */
    private $estado;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $correoElectronico;

    /**
     * @var boolean
     */
    private $externo;

    /**
     * @var \AppBundle\Entity\Cargo
     */
    private $cargo;


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
     * Set matriculaCodigo
     *
     * @param string $matriculaCodigo
     *
     * @return Empleado
     */
    public function setMatriculaCodigo($matriculaCodigo)
    {
        $this->matriculaCodigo = $matriculaCodigo;

        return $this;
    }

    /**
     * Get matriculaCodigo
     *
     * @return string
     */
    public function getMatriculaCodigo()
    {
        return $this->matriculaCodigo;
    }

    /**
     * Set paterno
     *
     * @param string $paterno
     *
     * @return Empleado
     */
    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;

        return $this;
    }

    /**
     * Get paterno
     *
     * @return string
     */
    public function getPaterno()
    {
        return $this->paterno;
    }

    /**
     * Set materno
     *
     * @param string $materno
     *
     * @return Empleado
     */
    public function setMaterno($materno)
    {
        $this->materno = $materno;

        return $this;
    }

    /**
     * Get materno
     *
     * @return string
     */
    public function getMaterno()
    {
        return $this->materno;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Empleado
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Empleado
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Empleado
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
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Empleado
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empleado
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return Empleado
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     *
     * @return Empleado
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get correoElectronico
     *
     * @return string
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set externo
     *
     * @param boolean $externo
     *
     * @return Empleado
     */
    public function setExterno($externo)
    {
        $this->externo = $externo;

        return $this;
    }

    /**
     * Get externo
     *
     * @return boolean
     */
    public function getExterno()
    {
        return $this->externo;
    }

    /**
     * Set cargo
     *
     * @param \AppBundle\Entity\Cargo $cargo
     *
     * @return Empleado
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

