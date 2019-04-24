<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MesaRepository")
 */
class Mesa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $asientos;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAsientos(): ?int
    {
        return $this->asientos;
    }

    public function setAsientos(int $asientos): self
    {
        $this->asientos = $asientos;

        return $this;
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
}
