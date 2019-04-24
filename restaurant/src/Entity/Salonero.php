<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SaloneroRepository")
 */
class Salonero
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $limiteMesas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getLimiteMesas(): ?int
    {
        return $this->limiteMesas;
    }

    public function setLimiteMesas(int $limiteMesas): self
    {
        $this->limiteMesas = $limiteMesas;

        return $this;
    }
}
