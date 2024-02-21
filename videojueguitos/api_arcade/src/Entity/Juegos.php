<?php

namespace App\Entity;

use App\Repository\JuegosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JuegosRepository::class)]
class Juegos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $nombre = null;

    #[ORM\Column(length: 125, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(nullable: true)]
    private ?int $votos_positivos = null;

    #[ORM\Column(nullable: true)]
    private ?int $votos_negativos = null;

    #[ORM\Column(length: 45, nullable: true)]
    private ?string $imagen = null;

    #[ORM\ManyToMany(targetEntity: Genero::class, inversedBy: 'juegos')]
    private Collection $genero;

    public function __construct()
    {
        $this->genero = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getVotosPositivos(): ?int
    {
        return $this->votos_positivos;
    }

    public function setVotosPositivos(?int $votos_positivos): static
    {
        $this->votos_positivos = $votos_positivos;

        return $this;
    }

    public function getVotosNegativos(): ?int
    {
        return $this->votos_negativos;
    }

    public function setVotosNegativos(?int $votos_negativos): static
    {
        $this->votos_negativos = $votos_negativos;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): static
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * @return Collection<int, Genero>
     */
    public function getGenero(): Collection
    {
        return $this->genero;
    }

    public function addGenero(Genero $genero): static
    {
        if (!$this->genero->contains($genero)) {
            $this->genero->add($genero);
        }

        return $this;
    }

    public function removeGenero(Genero $genero): static
    {
        $this->genero->removeElement($genero);

        return $this;
    }
}
