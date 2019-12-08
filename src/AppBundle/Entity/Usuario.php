<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $dni;
    /**
     * @ORM\Column(type="string")
     */
    private $nombre;
    /**
     * @ORM\Column(type="string")
     */
    private $apellidos;
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $esDocente;
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $esDirectivo;
    /**
     * @ORM\Column(type="string")
     * @var bool
     */
    private $esAdministrador;
}
