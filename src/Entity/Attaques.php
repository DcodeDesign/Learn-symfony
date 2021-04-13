<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attaques
 *
 * @ORM\Table(name="attaques", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass=AttaquesRepository::class)
 */
class Attaques
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
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false)
     */
    private $typeId;

    /**
     * @var int
     *
     * @ORM\Column(name="pp", type="integer", nullable=false)
     */
    private $pp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="puissance", type="integer", nullable=true)
     */
    private $puissance;

    /**
     * @var int
     *
     * @ORM\Column(name="precision", type="integer", nullable=false)
     */
    private $precision;

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

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getPp(): ?int
    {
        return $this->pp;
    }

    public function setPp(int $pp): self
    {
        $this->pp = $pp;

        return $this;
    }

    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(?int $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getPrecision(): ?int
    {
        return $this->precision;
    }

    public function setPrecision(int $precision): self
    {
        $this->precision = $precision;

        return $this;
    }


}
