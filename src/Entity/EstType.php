<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstType
 *
 * @ORM\Table(name="est_type", indexes={@ORM\Index(name="FK_type_id", columns={"type_id"}), @ORM\Index(name="FK_poke_id", columns={"pokemon_id"})})
 * @ORM\Entity(repositoryClass=EstTypeRepository::class)
 */
class EstType
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
     * @var \Pokemons
     *
     * @ORM\ManyToOne(targetEntity="Pokemons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pokemon_id", referencedColumnName="id")
     * })
     */
    private $pokemon;

    /**
     * @var \Pokemons
     *
     * @ORM\ManyToOne(targetEntity="Pokemons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemon(): ?Pokemons
    {
        return $this->pokemon;
    }

    public function setPokemon(?Pokemons $pokemon): self
    {
        $this->pokemon = $pokemon;

        return $this;
    }

    public function getType(): ?Pokemons
    {
        return $this->type;
    }

    public function setType(?Pokemons $type): self
    {
        $this->type = $type;

        return $this;
    }


}
