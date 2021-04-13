<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemons
 *
 * @ORM\Table(name="pokemons")
 * @ORM\Entity(repositoryClass=PokemonsRepository::class)
 */
class Pokemons
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numPokedex", type="string", length=4, nullable=false)
     */
    private $numpokedex;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=10, nullable=false)
     */
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumpokedex(): ?string
    {
        return $this->numpokedex;
    }

    public function setNumpokedex(string $numpokedex): self
    {
        $this->numpokedex = $numpokedex;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


}
