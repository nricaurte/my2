<?php

namespace Acme\helloBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Materia
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
     * @return Materia
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
     * @ORM\OneToMany(targetEntity="Alumnos", mappedBy="Materia")
     */
    protected $alumnos;

    public function __construct()
    {
        $this->alumnos = new ArrayCollection();
    }


    /**
     * Add alumnos
     *
     * @param \Acme\helloBundle\Entity\Alumnos $alumnos
     * @return Materia
     */
    public function addAlumno(\Acme\helloBundle\Entity\Alumnos $alumnos)
    {
        $this->alumnos[] = $alumnos;

        return $this;
    }

    /**
     * Remove alumnos
     *
     * @param \Acme\helloBundle\Entity\Alumnos $alumnos
     */
    public function removeAlumno(\Acme\helloBundle\Entity\Alumnos $alumnos)
    {
        $this->alumnos->removeElement($alumnos);
    }

    /**
     * Get alumnos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
}
