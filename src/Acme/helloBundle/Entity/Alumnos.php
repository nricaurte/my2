<?php

namespace Acme\helloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\helloBundle\Entity\AlumnosRepository")
 */
class Alumnos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200)
     */
    private $email;
    
    
    /**
     * @var  integer
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

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
     * @return Alumnos
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
     * Set email
     *
     * @param string $email
     * @return Alumnos
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return string 
     */
    public function getEdad()
    {
        return $this->edad;
    }



    /**
     * @ORM\ManyToOne(targetEntity="Materia", inversedBy="Alumnos")
     * @ORM\JoinColumn(name="materia_id", referencedColumnName="id")
     */
    protected $materia;



    /**
     * Set materia
     *
     * @param \Acme\helloBundle\Entity\Materia $materia
     * @return Alumnos
     */
    public function setMateria(\Acme\helloBundle\Entity\Materia $materia = null)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \Acme\helloBundle\Entity\Materia 
     */
    public function getMateria()
    {
        return $this->materia;
    }
}
