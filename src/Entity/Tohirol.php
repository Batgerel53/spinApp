<?php

namespace App\Entity;

use App\Repository\TohirolRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TohirolRepository::class)
 */
class Tohirol
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $chance;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }


    public function getQuantity(): ?int
    {
        return $this->quantity;
    }


    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getChance(): ?float
    {
        return $this->chance;
    }

    public function setChance(?float $chance): self
    {
        $this->chance = $chance;

        return $this;
    }
}
