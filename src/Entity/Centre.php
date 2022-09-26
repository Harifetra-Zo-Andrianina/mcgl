<?php

namespace App\Entity;

use App\Repository\CentreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CentreRepository::class)
 */
class Centre
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $region;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $district;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $rattachement;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $operateur;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $modifie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getRattachement(): ?string
    {
        return $this->rattachement;
    }

    public function setRattachement(?string $rattachement): self
    {
        $this->rattachement = $rattachement;

        return $this;
    }

    public function getOperateur(): ?string
    {
        return $this->operateur;
    }

    public function setOperateur(?string $operateur): self
    {
        $this->operateur = $operateur;

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
}
