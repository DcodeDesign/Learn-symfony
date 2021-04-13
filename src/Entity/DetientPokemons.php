<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetientPokemons
 *
 * @ORM\Table(name="detient_pokemons", indexes={@ORM\Index(name="FK_poke_id2", columns={"pokemon_id"}), @ORM\Index(name="FK_dresseur_id", columns={"dresseur_id"})})
 * @ORM\Entity(repositoryClass=DetientPokemonsRepository::class)
 */
class DetientPokemons
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
     * @var \Dresseurs
     *
     * @ORM\ManyToOne(targetEntity="Dresseurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dresseur_id", referencedColumnName="id")
     * })
     */
    private $dresseur;

    /**
     * @var \Pokemons
     *
     * @ORM\ManyToOne(targetEntity="Pokemons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pokemon_id", referencedColumnName="id")
     * })
     */
    private $pokemon;

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

    public function getDresseur(): ?Dresseurs
    {
        return $this->dresseur;
    }

    public function setDresseur(?Dresseurs $dresseur): self
    {
        $this->dresseur = $dresseur;

        return $this;
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


}
