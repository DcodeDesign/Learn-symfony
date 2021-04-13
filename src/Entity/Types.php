<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Types
 *
 * @ORM\Table(name="types", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass=TypesRepository::class)
 */
class Types
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=10, nullable=false)
     */
    private $libelle;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


}
