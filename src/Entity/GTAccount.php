<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class GTAccount{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $token;
}