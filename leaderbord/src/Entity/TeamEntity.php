<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamEntityRepository")
 */
class TeamEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(name="skill_mu", type="float", precision=10, scale=0, nullable=false)
     */
    private $skillMu;

    /**
     * @ORM\Column(name="skill_sigma", type="float", precision=10, scale=0, nullable=false)
     */
    private $skillSigma;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSkillMu(): ?float
    {
        return $this->skillMu;
    }

    public function setSkillMu(float $skillMu): self
    {
        $this->skillMu = $skillMu;

        return $this;
    }

    public function getSkillSigma(): ?float
    {
        return $this->skillSigma;
    }

    public function setSkillSigma(float $skillSigma): self
    {
        $this->skillSigma = $skillSigma;

        return $this;
    }
}