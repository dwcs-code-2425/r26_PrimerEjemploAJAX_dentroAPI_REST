<?php

namespace App\Entity;

use App\Repository\LibroRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LibroRepository::class)]
class Libro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]

    #[Assert\NotBlank(message: "El título es obligatorio", normalizer:"trim")]
     #[Assert\Length(
        min: 2,
        max: 10,
        minMessage: "El título debe tener al menos {{ limit }} caracteres",
        maxMessage: "El título no puede superar {{ limit }} caracteres"
    )]
    private ?string $titulo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }
}
