<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AyBRepository")
 */
class AyB
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $tipo;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $urlImagen;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=3)
     */
    private $costo;

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

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(int $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getUrlImagen(): ?string
    {
        return $this->urlImagen;
    }

    public function setUrlImagen(string $urlImagen): self
    {
        $this->urlImagen = $urlImagen;

        return $this;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($costo): self
    {
        $this->costo = $costo;

        return $this;
    }
}
