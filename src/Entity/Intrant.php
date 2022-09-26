<?php

namespace App\Entity;

use App\Repository\IntrantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IntrantRepository::class)
 */
class Intrant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $local;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $p1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p4;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $modifie;

    /**
     * @ORM\ManyToOne(targetEntity=centre::class)
     */
    private $centre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLocal(): ?string
    {
        return $this->local;
    }

    public function setLocal(?string $local): self
    {
        $this->local = $local;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getP1(): ?string
    {
        return $this->p1;
    }

    public function setP1(?string $p1): self
    {
        $this->p1 = $p1;

        return $this;
    }

    public function getP2(): ?int
    {
        return $this->p2;
    }

    public function setP2(?int $p2): self
    {
        $this->p2 = $p2;

        return $this;
    }

    public function getP3(): ?int
    {
        return $this->p3;
    }

    public function setP3(?int $p3): self
    {
        $this->p3 = $p3;

        return $this;
    }

    public function getP4(): ?int
    {
        return $this->p4;
    }

    public function setP4(?int $p4): self
    {
        $this->p4 = $p4;

        return $this;
    }

    public function getModifie(): ?bool
    {
        return $this->modifie;
    }

    public function setModifie(?bool $modifie): self
    {
        $this->modifie = $modifie;

        return $this;
    }

    public function getCentre(): ?centre
    {
        return $this->centre;
    }

    public function setCentre(?centre $centre): self
    {
        $this->centre = $centre;

        return $this;
    }
}
