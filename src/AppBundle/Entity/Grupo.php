<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="grupo")
 */
class Grupo{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $nombre;
}
