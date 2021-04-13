<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvolueEn
 *
 * @ORM\Table(name="evolue_en", indexes={@ORM\Index(name="FK_pokemon_evol_id", columns={"pokemon_evol_id"}), @ORM\Index(name="FK_pokemon_base_id", columns={"pokemon_base_id"})})
 * @ORM\Entity(repositoryClass=EvolueEnRepository::class)
 */
class EvolueEn
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
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau;

    /**
     * @var \Pokemons
     *
     * @ORM\ManyToOne(targetEntity="Pokemons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pokemon_base_id", referencedColumnName="id")
     * })
     */
    private $pokemonBase;

    /**
     * @var \Pokemons
     *
     * @ORM\ManyToOne(targetEntity="Pokemons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pokemon_evol_id", referencedColumnName="id")
     * })
     */
    private $pokemonEvol;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getPokemonBase(): ?Pokemons
    {
        return $this->pokemonBase;
    }

    public function setPokemonBase(?Pokemons $pokemonBase): self
    {
        $this->pokemonBase = $pokemonBase;

        return $this;
    }

    public function getPokemonEvol(): ?Pokemons
    {
        return $this->pokemonEvol;
    }

    public function setPokemonEvol(?Pokemons $pokemonEvol): self
    {
        $this->pokemonEvol = $pokemonEvol;

        return $this;
    }


}
