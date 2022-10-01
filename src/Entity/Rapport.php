<?php

namespace App\Entity;

use App\Repository\RapportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RapportRepository::class)
 */
class Rapport
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $p1;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p7;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p8;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p9;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $p10;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $modifie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $local;

    /**
     * @ORM\ManyToOne(targetEntity=Centre::class)
     */
    private $centre;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $remarque;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $date_sync;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getP2(): ?string
    {
        return $this->p2;
    }

    public function setP2(?string $p2): self
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

    public function getP5(): ?int
    {
        return $this->p5;
    }

    public function setP5(?int $p5): self
    {
        $this->p5 = $p5;

        return $this;
    }

    public function getP6(): ?int
    {
        return $this->p6;
    }

    public function setP6(?int $p6): self
    {
        $this->p6 = $p6;

        return $this;
    }

    public function getP7(): ?int
    {
        return $this->p7;
    }

    public function setP7(?int $p7): self
    {
        $this->p7 = $p7;

        return $this;
    }

    public function getP8(): ?int
    {
        return $this->p8;
    }

    public function setP8(?int $p8): self
    {
        $this->p8 = $p8;

        return $this;
    }

    public function getP9(): ?int
    {
        return $this->p9;
    }

    public function setP9(?int $p9): self
    {
        $this->p9 = $p9;

        return $this;
    }

    public function getP10(): ?int
    {
        return $this->p10;
    }

    public function setP10(?int $p10): self
    {
        $this->p10 = $p10;

        return $this;
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

    public function getModifie(): ?bool
    {
        return $this->modifie;
    }

    public function setModifie(?bool $modifie): self
    {
        $this->modifie = $modifie;

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

    public function getLocal(): ?string
    {
        return $this->local;
    }

    public function setLocal(?string $local): self
    {
        $this->local = $local;

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

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): self
    {
        $this->remarque = $remarque;

        return $this;
    }

    public function getDateSync(): ?string
    {
        return $this->date_sync;
    }

    public function setDateSync(?string $date_sync): self
    {
        $this->date_sync = $date_sync;

        return $this;
    }
}
