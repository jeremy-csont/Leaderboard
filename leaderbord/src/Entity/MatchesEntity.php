<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchesEntityRepository")
 */
class MatchesEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="start", type="datetime", nullable=true)
     */
    private $start;

    /**
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @ORM\Column(name="winner", type="integer", nullable=true)
     */
    private $winner;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TeamEntity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_team1", referencedColumnName="id")
     * })
     */
    private $idTeam1;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TeamEntity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_team2", referencedColumnName="id")
     * })
     */
    private $idTeam2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(?\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(?\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getWinner(): ?int
    {
        return $this->winner;
    }

    public function setWinner(?int $winner): self
    {
        $this->winner = $winner;

        return $this;
    }

    public function getIdTeam1(): ?TeamEntity
    {
        return $this->idTeam1;
    }

    public function setIdTeam1(?TeamEntity $idTeam1): self
    {
        $this->idTeam1 = $idTeam1;

        return $this;
    }

    public function getIdTeam2(): ?TeamEntity
    {
        return $this->idTeam2;
    }

    public function setIdTeam2(?TeamEntity $idTeam2): self
    {
        $this->idTeam2 = $idTeam2;

        return $this;
    }
}
