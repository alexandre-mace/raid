<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
 */
class Player
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Role", inversedBy="players")
     * @ORM\JoinColumn(nullable=false)
     */
    private $role;

    /**
     * @ORM\Column(type="integer")
     */
    private $lifePoints;

    /**
     * @ORM\Column(type="integer")
     */
    private $damage;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Enemy", inversedBy="players")
     */
    private $enemy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Game", inversedBy="players")
     */
    private $game;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getLifePoints(): ?int
    {
        return $this->lifePoints;
    }

    public function setLifePoints(int $lifePoints): self
    {
        $this->lifePoints = $lifePoints;

        return $this;
    }

    public function getDamage(): ?int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): self
    {
        $this->damage = $damage;

        return $this;
    }

    public function getEnemy(): ?Enemy
    {
        return $this->enemy;
    }

    public function setEnemy(?Enemy $enemy): self
    {
        $this->enemy = $enemy;

        return $this;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function setGame(?Game $game): self
    {
        $this->game = $game;

        return $this;
    }
}
