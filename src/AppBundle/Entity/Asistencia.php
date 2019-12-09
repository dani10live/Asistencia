<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="asistencia")
 */
class Asistencia{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    private $fecha;
    /**
     * @ORM\Column(type="string")
     */
    private $tipo;
    /**
     * @ORM\Column(type="string")
     */
    private $comentario;
}
